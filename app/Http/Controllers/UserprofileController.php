<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userprofile;

class UserprofileController extends Controller
{
    public function form_user(){
        return view('userprofile.form_user');
    }
    public function save_user(Request $request){
        $data=$request->all();
        $savedata=userprofile::create($data);
        $savedata->save();
        return back();
    }

    public function table_user(){
        $data=userprofile::all();
        return view('userprofile.table_user',compact('data'));
    }

    public function delete_user($id){
        $data=userprofile::find($id);
        $data->delete();
        return redirect('table_user');
     }
     public function edit_user($id){
        $data=userprofile::find($id);
        return view('userprofile.edit_user',compact('data'));
     }
     public function update_user(Request $request,$id){
        $data=userprofile::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->address=$request->address;
        $data->city=$request->city;
        $data->state=$request->state;
        $data->country=$request->country;
        $data->zipcode=$request->zipcode;
        $data->password=$request->password;       
        $data->update();
        return redirect('table_user');      
     }
}
