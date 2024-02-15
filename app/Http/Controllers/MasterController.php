<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cartss;
use Session;

class MasterController extends Controller
{
    public static function getproimage($id){
        $getImage=product::where('id',$id)->first();
        return ($getImage) ? $getImage->image : '';
    }
    public static function getproname($id){
        $getname=product::where('id',$id)->first();
        return ($getname) ? $getname->name : '';
    }
    public static function gettotal(){
        $id=Session::get('user');
        $data=Cartss::select('price','qty')->where('profile_id',$id)->get();
        $total=0;
        foreach ($data as $val) {
            $price=$val['price'] * $val['qty'];
            $total+=$price;
        }
        return $total;
    }
}
