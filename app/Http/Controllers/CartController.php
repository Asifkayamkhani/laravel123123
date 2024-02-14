<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartss;
use App\Models\product;
use Session;

class CartController extends Controller
{
public function addtocart($id){
  if (Session()->has('user')) {
   $cart=new Cartss();
   $cart->profile_id=Session::get('user');
   $cart->product_id=$id;
   $cart->order_id=null;
   $cart->price=product::where('id',$id)->value('price');
   $cart->qty=1;
   $cart->save();
   return back();
   session()->flash('success','Add To Cart Successfully');
  }else {
    return redirect('login-fronted');
  }
}
}