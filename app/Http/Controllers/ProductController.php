<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;


class ProductController extends Controller
{
   public function form_product(){
      $category=category::select('id as category_id','name')->get();
    return view('product.form_product',compact('category'));
   }
   public function save_product(Request $request){
      $data=$request->all();
      if ($request->file('image')) {
         $file=$request->file('image');
         $file_name=date('YmdHi').$file->getClientOriginalName();
         $file->move(public_path('uploades/'),$file_name);
         $data['image']=$file_name;
      }else {
         $data['image']=$request->img;
      }
      $slug=$request->name;
      $sd=str_replace(' ','-',$slug);
      if (product::where('slug',$sd)->exists()) {
         $data['slug']=$sd.rand(99,999);
      }else {
         $data['slug']=$sd;
      }
     
      $sku="pro".rand(555,5555)."ldt";
      $data['sku']=$sku;
      $data['slug']=$slug;
      $form=product::create($data);    
      return redirect('card_product');
      
   }
   public function card_product(){
      $card=product::all();
      return view('product.card_product',compact('card'));
   }
   public function status_product($id){
      $data=product::find($id);
      if ($data->status==1) {
         $data->status=0;
      }else {
         $data->status=1;

      }
      $data->update();
      return redirect('card_product');

   }
   public function delete_product($id){
      $data=product::find($id);
      $data->delete();
      return redirect('card_product');
   }
   public function edit_product($id){
      $data=product::find($id);
      return view('product.edit_product',compact('data'));
   }
   public function update_product(Request $request,$id){
      $data=product::find($id);
      $data->name=$request->name;
      $data->color=$request->color;
      $data->hsn_code=$request->hsn_code;
      $data->size=$request->size;
      $data->gst=$request->gst;
      $data->describtion=$request->describtion;
      $data->mrp=$request->mrp;
      $data->price=$request->price;
      $data->quentity=$request->quentity;
      $data->condition=$request->condition;
      $data->status=$request->status;
      $data->update();
      return redirect('card_product');      
   }
}