<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class songcontroller extends Controller
{
    public function getplaylist()
    {
      return view('playlist');
    }

}
