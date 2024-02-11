<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function form_category(){
        return view('category.form_category');
    }
    public function save_category(Request $request){
        $data=$request->all();
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);  
            $data['image']=$file_name; 
        }
        $slug=$request->name;
        $sd=str_replace(' ','-',$slug);
        if (category::where('slug',$sd)->exists()) {
            $data['slug']=$sd.rand(1,999999);
        }else {
            $data['slug']=$sd;
        }

        
        $form=category::create($data);
        $form->save();
        return redirect('table_category');
    }
    public function table_category(){
        $data=category::all();
        return view('category.table_category',compact('data'));
    }
   

    public function status_category($id){
        $status=category::find($id);
               
        if ($status->status==1) {
           $status->status=0;
        }else {
            $status->status=1;
        }
        $status->update();
        return redirect('table_category');
    }
    public function edit_category($id){
        $data=category::find($id);
        return view('category.edit_category',compact('data')); 
    }
    public function update_category(Request $request,$id){
        $data=category::find($id);
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);  
            $data['image']=$file_name; 
        }else {
            $data['image']=$request->img;
        }
        $data->name=$request->name;
        $data->describtion=$request->describtion;
        $data->status=$request->status;
        $data->update();
        return redirect('table_category');
    }
    public function delete_category($id){
        $data=category::find($id);
        $data->delete();
        return redirect('table_category');
    }

}
