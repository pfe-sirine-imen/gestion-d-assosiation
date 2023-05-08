<?php

namespace App\Http\Controllers\Admin;
use App\Models\Profil_user;
use App\Http\Controllers\Controller;
use App\Models\Compte_user;
use Illuminate\Http\Request;

class Compte_userController extends Controller
{
    public function compte_user (){
        $profil_user =  Profil_user::all();
        return view ('admin.compte_user',compact('profil_user'));
    }
    public function ajouter_tratm (Request $request){
        $request->validate([
            'mail'=>'required',
            'pwd'=>'required',
        ]);
        $compte_user = new compte_user();
        $compte_user->mail=$request->mail;
        $compte_user->pwd=$request->pwd;
        $compte_user->save();
        return redirect('/ajouter/tratm')->with('status','les vompte utilisateur a bien été ajouter avec succes');
    }
   
    
}
 