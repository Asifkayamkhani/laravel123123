<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartss extends Model
{
    use HasFactory;
    protected $fillable=[
        'profile_id',
        'product_id',
        'order_id',
        'price',
        'qty',
    ];
}
