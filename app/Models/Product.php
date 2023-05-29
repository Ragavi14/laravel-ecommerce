<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'price',
        'image',
        'stock',
        'description',
    ];

    public function cart(){
        return $this->belongsTo('App\Models\Cart', 'product_id');
    }
    
}
