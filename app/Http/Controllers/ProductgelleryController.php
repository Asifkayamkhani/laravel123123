<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productgellery;
use App\Models\product;

class ProductgelleryController extends Controller
{
    public function form_productgellery(){
        $product=product::select('id','name')->get();
        return view('productgellery.form_productgellery',compact('product'));
    }
    public function save_productgellery(Request $request){
        $data=$request->all();
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['image']=$file_name;
        }
        $savedata=productgellery::create($data);
        $savedata->save();
        return redirect('table_productgellery');
    }
    public function table_productgellery(){
        $data=Productgellery::all();
        return view('productgellery.table_productgellery',compact('data'));
    }

    public function status_productgellery($id){
        $data=Productgellery::find($id);
        if ($data->status==1) {
           $data->status=0;
        }else {
           $data->status=1;
  
        }
        $data->update();
        return redirect('table_productgellery');
  
     }


     public function delete_productgellery($id){
        $data=Productgellery::find($id);
        $data->delete();
        return redirect('table_productgellery');
     }
     public function edit_productgellery($id){
        $data=Productgellery::find($id);
        return view('productgellery.edit_productgellery',compact('data'));
     }
     public function update_productgellery(Request $request,$id){
        $data=Productgellery::find($id);
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);  
            $data['image']=$file_name; 
        }else {
            $data['image']=$request->img;
        }
        $data->type=$request->type;
        $data->status=$request->status;
        $data->update();
        return redirect('table_productgellery');      
     }

}
