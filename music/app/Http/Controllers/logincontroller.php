<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class logincontroller extends Controller
{
  public function getloginpage()
  {
    return view('login');
  }
    public function login(Request $request)
    {
      $credentials=$request->only('email','password');
      if(Auth::attempt($credentials))
      {
        return redirect()->route('home');
      }
      else {
        return redirect()->intended('login');
      }
    }
}
