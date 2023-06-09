<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Bailleur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
class Compte_bailleurController extends Controller
{
    public function compte_bailleur (){
        $bailleur =  Bailleur::all();
        $bailleur = DB::table('bailleurs')
            ->orderBy('id','DESC')
            ->get();
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
            'dons_id'=>'required',
           
           
        ]);

        $bailleurs= new Bailleur();
        $bailleurs->nom=$request->nom; 
        $bailleurs->prenom=$request->prenom;
        $bailleurs->mail=$request->mail;
        $bailleurs->pwd=Hash::make($request->pwd);
        $bailleurs->pays=$request->pays;
        $bailleurs->denomination=$request->denomination;
        $bailleurs->dons_id=$request->dons_id;
       
        $bailleurs->save();

      return redirect('/admin/compte_bailleur')->with('status','ajouter le compte de chef de suivi avec succes!');
   }
    



}
