<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManualController extends Controller
{
    //
    public function manualRegister(Request $request)
    {
        // dd($request);
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'm_id' => $request['manual_id'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        
    }

    public function show(){
        $id = auth()->id();
        $data = User::where(['m_id'=> $id])->get();
        $data=$data->toArray();
        return view('table',compact('data'));
    }

    
        public function  delete(User $id)
        {
            // print_r($id->toArray());
            // Storage::disk('public')->delete('images',$id->image);
            $id->delete();
        } 
    
}


