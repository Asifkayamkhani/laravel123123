<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productgellery extends Model
{
    use HasFactory;
    protected $fillable=['product_id','image','type','status'];

}