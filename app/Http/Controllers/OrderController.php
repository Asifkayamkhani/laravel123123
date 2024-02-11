<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;

class OrderController extends Controller
{
        public function form_order(){
            $data=product::select('id','name')->get();
            return view('order.form_order',compact('data'));
        }
        public function save_order(Request $request){
            $data=$request->all();
            $savedata=order::create($data);
            $savedata->save();
            return redirect('table_order');
        }
        public function table_order(){
            $data=order::all();
            return view('order.table_order',compact('data'));

        }

        public function status_order($id){
            $data=order::find($id);
            if ($data->status==1) {
               $data->status=0;
            }else {
               $data->status=1;
      
            }
            $data->update();
            return redirect('table_order');
      
         }

        public function delete_order($id){
            $data=order::find($id);
            $data->delete();
            return redirect('table_order');
        }

        public function edit_order($id){
            $data=order::find($id);
            return view('order.edit_order',compact('data')); 
        }
        public function update_order(Request $request,$id){
            $data=order::find($id);
            $data->order_number=$request->order_number;
            $data->status=$request->status;
            $data->update();
            return redirect('table_order');
        }

}