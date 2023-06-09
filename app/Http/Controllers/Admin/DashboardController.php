<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil_user;
use App\Models\Bailleur;
use App\Models\Adherents;
use App\Models\Events;
use App\Models\Don;
use App\Models\Caisse;
use App\Models\Projet;
use App\Models\Reunion;

class DashboardController extends Controller
{
    public function Index(){
        $totalUser = Profil_user::count();
        $totalBailleur = Bailleur::count();
        $totalAdherent = Adherents::count();
        $totalEvent = Events::count();
        $totalDon = Don::count();
        $totalCaisse = Caisse::count();
        $totalProjet = Projet::count();
        $totalReunion = Reunion::count();

        return view('admin.dashboard' , compact('totalUser','totalBailleur','totalAdherent','totalEvent','totalDon','totalCaisse','totalProjet','totalReunion'));
    }
    
  
}
