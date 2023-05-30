<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function Index(){

        return view('user_template.layouts.sous_template');
    }

    public function ass(){

        return view('user_template.layouts.sous_template');
    }
   
}
  
