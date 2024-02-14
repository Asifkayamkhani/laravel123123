<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiless extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'number',
        'address',
        'pincode',
        'country',
        'state',
        'city',
        'password',
    ];
}
