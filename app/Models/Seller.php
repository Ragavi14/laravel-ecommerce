<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mobile',
        'shop_name',
        'shop_address',
        
    ];
}
