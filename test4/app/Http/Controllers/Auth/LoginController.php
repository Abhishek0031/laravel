<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

        protected function authenticated(Request $request, $user)
        {
            // dd($user->role);
            if($user->role=="admin"){
            //   $role='Subadmin';
            //   return redirect()->view('auth.register',compact('role'));
            return redirect()->route('admin');
            }
            else if($user->role=="Subadmin"){
                return redirect()->route('subadmin');

            }
            else{
                return redirect()->route('user');
                
            }
        }
}
