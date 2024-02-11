<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;

class SettingController extends Controller
{
//    public function form_setting(){
//     return view('setting.form_setting');
//    }
//    public function save_setting(Request $request){
//     $data=$request->all();
//     $savedata=setting::create($data);
//     $savedata->save();
//     return redirect('edit_setting');
//    }
   public function edit_setting(){
    $data=setting::find(1);
    return view('setting.edit_setting',compact('data'));
   }
   public function update_setting(Request $request){
        $data=setting::find(1);
        $data->email=$request->email;
        $data->number=$request->number;
        $data->address=$request->address;
        $data->describtion=$request->describtion;
        $data->update();
        return back();
   }
}
