<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BailleurController extends Controller
{
    public function Index(){
        return view('bailleur_template.bailleur');
    }

    public function profilpage(){
        return view('bailleur_template.profil_b');
    }

    public function consulterdons(){
        return view('bailleur_template.dons_b');
    }

    public function consulterreunion(){
        return view('bailleur_template.reunion_b');
    }

    public function consulterevenements(){
        return view('bailleur_template.evenement_b');
    }

    public function consultercaisse(){
        return view('bailleur_template.caisse_b');
    }

    public function consulterprojet(){
        return view('bailleur_template.projet_b');
    }
}
