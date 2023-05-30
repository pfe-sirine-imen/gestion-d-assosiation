<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index(){
        return view('admin.dashboard');
    }
    public function ajouteruser(Request  $request){
        $request->validate([
            'nom' =>'required|string',
            'prenom'=>'required|string',
            'mail'=>'required|email',
            'pwd'=>'required',
            'domaine_activite'=>'required|string',
            'pays'=>'required|string',
            'tel'=>'required|max:8',
        ]);
        $profil_users= new Profil_user();
        $profil_users->nom=$request->nom;
        $profil_users->prenom=$request->prenom;
        $profil_users->mail=$request->mail;
        $profil_users->domaine_activite=$request->domaine_activite;
        $profil_users->pays=$request->pays;
        $profil_users->tel=$request->tel;
        $profil_users->pwd=$request->pwd;
        $profil_users->save();
        
        return redirect('/compte_user')->with('status','Ajouter utilisateur avec  succes!');
    }
  
}
