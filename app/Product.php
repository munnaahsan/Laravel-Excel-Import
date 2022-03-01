<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = "products";

    protected $fillable = [
        'parent_category', 'category', 'sub_category','part_name','part_no',
    ];
}

