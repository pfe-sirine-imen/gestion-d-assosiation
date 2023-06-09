<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
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
        $bailleurs->pwd=Hash::make($request->pwd);
        $bailleurs->pays=$request->pays;
        $bailleurs->denomination=$request->denomination;
       
        $bailleurs->save();

      return redirect('/profil_b')->with('status','Modifier  le  profil de chef de suivi avec  succes!');
   }

    public function consulterdons(Request $request){
        if($request->has('search')){
            $dons = Don::where('nom','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
            
            $bailleurs = Bailleur::with('dons');
            $dons = Don::with('bailleurs');
            $dons =  Don::paginate(10);
        }
      
        return view('bailleur_template.liste_don_b',compact('dons','bailleurs'));
    }

    public function consulterreunion(Request $request){
        if($request->has('search')){
            $reunions = Reunion::where('titre','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
            $reunions =  Reunion::paginate(10);
        }
       
        return view('bailleur_template.liste_ren',compact('reunions'));
    }

    public function consulterevenements(Request $request){
        if($request->has('search')){
            $evens = Evenement::where('titre','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
            $evens =  Evenement::paginate(10);
        }
       
        return view('bailleur_template.liste_eve_b',compact('evens'));
    }
   

    public function consultercaisse(Request $request){
        if($request->has('search')){
            $caisses = Caisse::where('cin','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
            $caisses =  Caisse::paginate(10);
        }
   
        return view('bailleur_template.liste_caisse_b',compact('caisses'));
    }

    public function consulterprojet(Request $request){
        if($request->has('search')){
            $projets = Projet::where('mail','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
            $projets =  Projet::paginate(10);
        }
 
            return view ('bailleur_template.liste_projet_b',compact('projets'));
        }
       
    
}
