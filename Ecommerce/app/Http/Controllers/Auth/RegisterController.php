<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        
        // dd($data);
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'gender' => $data['gender'],
        //     'password' => Hash::make($data['password']),
        // ]);

        $user=User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'role'=>'user',
            'password'=>$data['password'],
            'email_verified_at'=>now(),
        ]);
       
          UserDetail::updateOrCreate([
            'user_id' => $user->id,
        ], [
            'user_id' => $user->id,
            'dob'=>$data['date'],
            'address'=>$data['address'],   
            'phone' => $data['phone'],
            'gender' => $data['gender'],
        ]);
        return $user ;
    

    }
}
