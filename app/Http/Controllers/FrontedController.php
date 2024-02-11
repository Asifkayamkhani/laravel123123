<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\banner;
use App\Models\Testimonial;
// use App\Models\Productgellery;

class FrontedController extends Controller
{
    public function home(){
        $google=Testimonial::where('status',1)->get();
        $banner=Banner::where('status',1)->get();
        $category=category::where('status',1)->get();
        $pro=product::where('status',1)->get();
        return view('fronted.index',compact('category','banner','pro','google'));
    }
    public function cart(){
        return view('fronted.cart');
    }
    public function login(){
        return view('fronted.login');
    }
    public function pro($id){
        $product=product::where('slug',$id)->get();
        return view('fronted.pro-details',compact('product'));
    }
    public function checkout(){
        return view('fronted.checkout');
    }
    public function blog(){
        return view('fronted.blog');
    }
    public function elements(){
        return view('fronted.elements');
    }
    public function details(){
        return view('fronted.blog-details');
    }
    public function contact(){
        return view('fronted.contact');
    }
    public function category($slugid){    
        $category=category::where('slug',$slugid)->value('id');
        $pdata=product::where('category_id',$category)->get();
        return view('fronted.categories',compact('slugid','pdata'));
    }
}