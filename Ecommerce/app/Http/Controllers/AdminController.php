<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\Raw;

class AdminController extends Controller
{
    //
    public function index(Request $request){
        // dd($request->role);
        if($request->role=='Admin')
        {
            $role='Service Provider';
        }else{
            $role='user';

        }
       $id=auth()->id();
        $data=User::where('role',$role)->get();
        $pro=Product::where('user_id',$id)->get();
        // dd($pro);
        return view('listPage',compact('data','pro'));
       }

       public function viewForm(){
        $id=auth()->id();
        // dd($id);
        return view('providerForm',['id'=>$id]);
       }

 public function create(Request $request,User $user){
  $id=auth()->id();
    $user=User::create([
        'parent_id'=>$id,
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>'Service Provider',
        'password'=>$request->password,
        'email_verified_at'=>now(),
    ]);
   
        UserDetail::updateOrCreate([
        'user_id' => $user->id,
    ], [
        'user_id' => $user->id,
        'dob'=>$request->date,
        'address'=>$request->address,   
        'phone' => $request->phone,

    ]);
    return redirect()->route('admin',['role'=>'Admin']);

    // return 'data added';

       }
    //    public function add(Request $request){
    //     dd($request);
    //     }

    public function itemForm(){
        $id=auth()->id();
        // dd($id);
        return view('itemAdd',['id'=>$id]);
       }


       public function createItem(Request $request,Product $product){
      $id=auth()->id();

    //   Storage::disk('public')->delete('images',$id->image);
    if($request->file!=null && $request->current_price>=$request->sale_price){
    $path = Storage::disk('public')->put('images', $request->file);
       Product::create([
       'user_id'=>$id,
       'title'=>$request->item,
       'date'=>$request->date,
       'discrition'=>$request->discription,
       'sale_price'=>$request->sale_price,
       'price'=>$request->current_price,
       'image'=>$path,
       ]);
       return redirect()->route('admin');
    }
    return 'prize is less than the sale prize';

           }
}


