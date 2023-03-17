<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdherentsController extends Controller
{
    public function profilpage(){
        return view ('user_template.profil');
    }

    public function adherentspage(){
        return view ('user_template.adherents');
    }

    public function reunionpage(){
        return view ('user_template.reunion');
    }

    public function evenementpage(){
        return view ('user_template.evenement');
    }

    public function projetpage(){
        return view ('user_template.projet');
        
    }

    public function donspage(){
        return view ('user_template.dons');
    }

    public function caissepage(){
        return view ('user_template.caisse');
    }
}
