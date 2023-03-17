<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Compte_userController extends Controller
{
    public function compte_user (){
        return view ('admin.compte_user');
    }
}
