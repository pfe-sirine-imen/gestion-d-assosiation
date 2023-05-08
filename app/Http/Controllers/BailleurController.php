<?php

namespace App\Http\Controllers;
use App\Models\Bailleur;
use App\Models\Evenement;
use App\Models\Reunion;
use App\Models\Don;
use App\Models\Caisse;
use App\Models\Projet;
use Illuminate\Http\Request;

class BailleurController extends Controller
{
    public function Index(){
        return view('bailleur_template.bailleur');
    }

    public function profilpage(){
        return view('bailleur_template.profil_b');
    }
    

    public function  ajouterbailleur(Request  $request){
 
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

      return redirect('/profil_b')->with('status','ajouter bailleur succes!');
   }

    public function consulterdons(Request $request){
        if($request->has('search')){
            $dons = Don::where('nom','LIKE','%'.$request->search.'%')->paginate(4);
        }else{
            $dons =  Don::paginate(4);
        }
      
        return view('bailleur_template.liste_don_b',compact('dons'));
    }

    public function consulterreunion(Request $request){
        if($request->has('search')){
            $reunions = Reunion::where('titre','LIKE','%'.$request->search.'%')->paginate(4);
        }else{
            $reunions =  Reunion::paginate(4);
        }
       
        return view('bailleur_template.liste_ren',compact('reunions'));
    }

    public function consulterevenements(Request $request){
        if($request->has('search')){
            $evens = Evenement::where('titre','LIKE','%'.$request->search.'%')->paginate(4);
        }else{
            $evens =  Evenement::paginate(4);
        }
       
        return view('bailleur_template.liste_eve_b',compact('evens'));
    }
   

    public function consultercaisse(Request $request){
        if($request->has('search')){
            $caisses = Caisse::where('cin','LIKE','%'.$request->search.'%')->paginate(4);
        }else{
            $caisses =  Caisse::paginate(4);
        }
   
        return view('bailleur_template.liste_caisse_b',compact('caisses'));
    }

    public function consulterprojet(Request $request){
        if($request->has('search')){
            $projets = Projet::where('nom','LIKE','%'.$request->search.'%')->paginate(4);
        }else{
            $projets =  Projet::paginate(4);
        }
 
            return view ('bailleur_template.liste_projet_b',compact('projets'));
        }
       
    
}
