<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable =[
        'name',
        'meta_keywords',
        'meta_des',
        'des',
        'youtube',
        'published',
        'user_id',
        'cat_id',
        'image'
    ];

}
