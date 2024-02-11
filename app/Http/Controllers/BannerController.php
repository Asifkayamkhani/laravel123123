<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function form_banner(){
        return view('banner.form_banner');
    }
    public function save_banner(Request $request){
        $data=$request->all();
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);  
            $data['image']=$file_name; 
        }
        $form=Banner::create($data);
        $form->save();
        return redirect('table_banner');    
    }
    public function table_banner(){
        $data=Banner::all();
        return view('banner.table_banner',compact('data'));
    }
    public function status_banner($id){
        $status=Banner::find($id);
               
        if ($status->status==1) {
           $status->status=0;
        }else {
            $status->status=1;
        }
        $status->update();
        return redirect('table_banner');
    }
    public function edit_banner($id){
        $data=Banner::find($id);
        return view('banner.edit_banner',compact('data')); 
    }
    public function update_banner(Request $request,$id){
        $data=Banner::find($id);
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
        return redirect('table_banner');
    }
    public function delete_banner($id){
        $data=Banner::find($id);
        $data->delete();
        return redirect('table_banner');
    }
    public function index(){
        return view('index');
    }
}