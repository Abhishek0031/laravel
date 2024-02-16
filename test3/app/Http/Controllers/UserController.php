<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome(User $user){
        $user=auth()->user();
        
        return view('user',compact('user'));
       }

    public function userUpdate(Request $request,User $user){
         dd($request);
        $user->update([
                  'name'=>$request['name'],
                  'email'=>$request['email'],

        ]);
       }
}
