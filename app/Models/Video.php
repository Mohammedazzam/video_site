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

    //عن طريق هدول الدالتين بقدر اصل لليوزر الي عمل post والبوست الي تحت من أي category
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function cat(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
