<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimonial;

class TestimonialController extends Controller
{
    public function form_test(){
        return view('testimonial.form_test');
    }
    public function save_test(Request $request){
        $data=$request->all();
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['image']=$file_name;
        }
        $savedata=testimonial::create($data);
        $savedata->save();
        return redirect('table_test');
    }
    public function table_test(){
        $data=testimonial::all();
        return view('testimonial.table_test',compact('data'));
    }

    public function status_test($id){
        $data=testimonial::find($id);
        if ($data->status==1) {
           $data->status=0;
        }else {
           $data->status=1;
  
        }
        $data->update();
        return redirect('table_test');
  
     }


     public function delete_test($id){
        $data=testimonial::find($id);
        $data->delete();
        return redirect('table_test');
     }
     public function edit_test($id){
        $data=testimonial::find($id);
        return view('testimonial.edit_test',compact('data'));
     }
     public function update_test(Request $request,$id){
        $data=testimonial::find($id);
        $data->name=$request->name;
        $data->describtion=$request->describtion;

        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);  
            $data['image']=$file_name; 
        }else {
            $data['image']=$request->img;
        }
        $data->status=$request->status;
        $data->update();
        return redirect('table_test');      
     }
}
