<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb extends Model
{
    use HasFactory;
    protected $table="tb";
    protected $primary="id";
}

//view ke ander folder banana h to small letters me agar uske ander file  banani h too  wo  bhi 
//protected $filable=>
//'name'
//''email'
//ye sare defin karne jaroori h
// seeder banana h too uske aage seeder likhna jaroori h
// trait ko banana h http folder me 
// controler me bhi file banate time hame uske aage Controler likhna h




