<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    // protected $name="name";
    // protected $email="email";
    protected $table = 'emps';

    // Define the model's attributes
    protected $fillable = ['name', 'email'];

}
