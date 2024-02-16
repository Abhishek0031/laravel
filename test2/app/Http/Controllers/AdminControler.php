<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
    class AdminControler extends Controller
{
    public function adminPage()   
    {
        $user=User::where(['role'=>'user'])->get();
        return view("auth.admin",compact('user'));
    }

    public function resetPasword(){
        $admin=auth()->user();

        return view("resetAdmin",compact('admin'));
    }
}

