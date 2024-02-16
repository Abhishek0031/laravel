<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function managerPage(){

        $user=auth()->user();
        // dd($user);
        return view("manager",compact('user'));
    }

    public function index(){
        $id=auth()->user();
        $data=User::where(['parent_id'=>$id->id])->get();
            return view('manager',['role'=>'staff'],compact('data'));

    }
}
