<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CommonController extends Controller
{
   public function view(Request $request){
    $id=auth()->id();

    if($id==1){

        $data= User::where(['role_id'=>$request->type])->get();
    }else{
        $data= User::where(['parent_id'=>$id])->get();
    }
    return view('listView',compact('data'),['role'=>$request->type]);
   }  
   
   public function formView(Request $request){
    
    return view('commonView',['role'=>$request->type]);
   }

   public function create(Request $request){
       $id=auth()->id();
    
    $user=User::create([
        'parent_id'=>$id,
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'email_verified_at'=>now(),
        'role_id'=>$request->role
    ]);
    return "data inserted";
    
   }



}
