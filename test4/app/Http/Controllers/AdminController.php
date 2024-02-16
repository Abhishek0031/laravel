<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view(){
        $id=auth()->id();
          return view('manual',['role'=>'Subadmin','page'=>'Admin','id'=>$id]);
    }
}
