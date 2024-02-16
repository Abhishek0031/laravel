<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PamentDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_mode',
        'card_no',
    ];
}
