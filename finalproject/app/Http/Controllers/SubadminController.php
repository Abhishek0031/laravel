<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SubadminController extends Controller
{
    public function subadminPage(){

        $user=auth()->user();
        // dd($user);
        return view("subadmin",compact('user'));
    }


    public function index(){
        $id=auth()->user();
        $dt=$id->userDetail;
        $data=User::where(['parent_id'=>$id->id])->get();
            return view('subadmin',['role'=>'manager'],compact('data'));

    }
}
