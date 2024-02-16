<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubAdminController extends Controller
{
    public function userView(){
        $id=auth()->id();
          return view('manual',['role'=>'user','page'=>'Subadmin','id'=>$id]);
    }


    
}
