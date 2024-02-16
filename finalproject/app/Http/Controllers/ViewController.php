<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ViewController extends Controller
{
   public function view(Request $request){
//    $user=auth()->user();
   $type=$request->type;
    return view('listview',['role'=>$type]);
   }

   public function add(Request $request){
       $user=auth()->id();
       $type=$request->type;
        return view('form',['role'=>$type,'id'=>$user]);
       }

       public function create(Request $request){
        //  dd($request);
         return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'parent_id' => $request['parent_id'],
            'role_id'=>$request['role'],
            'email_verified_at'=>now(),
            'password' => Hash::make($request['password']),
        ]);
        
        } 

        
        public function update(Request $request){
      $user=auth()->user();
    //   dd($user);
    return view('update',compact('user'));
        
        }



        // public function updateDetails(Request $request){
        //     // $user=auth()->user();
        //     dd($request);
        // //   return view('update',compact('user'));
              
        //       }


 public function updateDetails(Request $request ,User $id,UserDetail $detail)
    {
        $data=auth()->user();
        // dd($request->name);   
    $file = $request->file('file');

    // Storage::disk('public')->delete('images',$data->image);
    $path = Storage::disk('public')->put('images', $file);
            // dd($path);


        // $id->update([
         
        //            ]);



                   $id->update([
                    'id' => $data->id,
                               ], [
                                'name'=> $request->name,
                            ]);

     Userdetail::updateOrCreate([
        'user_id' => $data->id,
                   ], [
                    'gender'=>$request->gender,   
                    'phone' => $request->phone,
                    'image'=>$path
                ]);

    //  return redirect()->route('user_dash');
    }

}
