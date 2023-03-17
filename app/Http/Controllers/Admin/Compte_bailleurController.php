<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Compte_bailleurController extends Controller
{
    public function compte_bailleur (){
        return view ('admin.compte_bailleur');
    }
}
