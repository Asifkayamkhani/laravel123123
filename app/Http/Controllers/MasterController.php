<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

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
}
