<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners'; //add this line to define table name, make sure you have set the database config in .env
    protected $fillable = [
        'title', 'image', 'url', 'image_title', 'image_alt', 'banner_type', 'isActive'
    ];
}