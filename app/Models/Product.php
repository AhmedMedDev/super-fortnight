<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'thum',
        'images',
        'des',
        'sku',
        'price',
        'category_id',
        'supplier_id',
    ];

    public $timestamps = false;
}
