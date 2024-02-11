<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coupan;


class CoupanController extends Controller
{
    public function form_coupan(){
        return view('coupan.form_coupan');
    }
    public function save_coupan(Request $request){
        $data=$request->all();
        $savedata=coupan::create($data);
        $savedata->save();
        return redirect('table_coupan');
    }
    public function table_coupan(){
        $data=coupan::all();
        return view('coupan.table_coupan',compact('data'));
    }

    public function status_coupan($id){
        $data=coupan::find($id);
        if ($data->status==1) {
           $data->status=0;
        }else {
           $data->status=1;
  
        }
        $data->update();
        return redirect('table_coupan');
  
     }


     public function delete_coupan($id){
        $data=coupan::find($id);
        $data->delete();
        return redirect('table_coupan');
     }
     public function edit_coupan($id){
        $data=coupan::find($id);
        return view('coupan.edit_coupan',compact('data'));
     }
     public function update_coupan(Request $request,$id){
        $data=coupan::find($id);
        $data->code=$request->code;
        $data->discount=$request->discount;
        $data->status=$request->status;
        $data->update();
        return redirect('table_coupan');      
     }

}
