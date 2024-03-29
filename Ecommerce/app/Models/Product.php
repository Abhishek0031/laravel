<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'date',
        'discrition',
        'image',
        'price',
        'sale_price',
        'stock count',

    ];
}
