<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPage()   
    {
   $user=auth()->user();
        
        return view("admin",compact('user'));
    }
}
