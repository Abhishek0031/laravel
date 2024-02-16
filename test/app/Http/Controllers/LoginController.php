<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function submitLogin(Request $request)
  {
    dd($request->toArray());
  }
}
