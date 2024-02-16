<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    
    public function index(){
        $data=auth()->user();
        // $data=User::where(['parent_id'=>$id->id])->get();
            return view('staff',compact('data'));

    }
}
