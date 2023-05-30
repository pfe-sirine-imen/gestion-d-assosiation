<?php

namespace App\Http\Controllers\Admin;
use App\Models\Bailleur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Compte_bailleurController extends Controller
{
    public function compte_bailleur (){
        $bailleur =  Bailleur::all();
        return view ('admin.compte_bailleur',compact('bailleur'));
    }

    public function  ajouterbail(Request  $request){
 
        $request->validate([
            'nom' =>'required|string',
            'prenom'=>'required|string',
            'mail'=>'required|email',
            'pwd'=>'required',
            'pays'=>'required|string',
            'denomination'=>'required|string',
           
        ]);

        $bailleurs= new Bailleur();
        $bailleurs->nom=$request->nom; 
        $bailleurs->prenom=$request->prenom;
        $bailleurs->mail=$request->mail;
        $bailleurs->pwd=$request->pwd;
        $bailleurs->pays=$request->pays;
        $bailleurs->denomination=$request->denomination;
       
        $bailleurs->save();

      return redirect('/compte_bailleur')->with('status','ajouter bailleur succes!');
   }
    



}
