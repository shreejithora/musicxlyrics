<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function create()
    {
    return view('register');
  }
  public function store()
  {
    $this->validate(request(),[
      'firstname'=>'required|max:255|min:4',
      'lastname'=>'required|min:8',
      'email'=>'required|min:8',
      'password'=>'required|min:8',
      'password1'=>'required|min:8',
    ]);
    $user=User::create(request(['firstname','lastname','email','password']));
    return view('welcome');

  }
}
