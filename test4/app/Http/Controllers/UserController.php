<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $user=auth()->user();
        // dd($user);
          return view('user',compact('user'));
    }
}
