<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["category_name"];

    public static $rules = [
        'category_name' => 'required|min:2',
    ];
}