<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['name','image','slug','category_id','color','hsn_code','size','sku','gst','describtion','mrp','price','quentity','condition','status'];

    
}
