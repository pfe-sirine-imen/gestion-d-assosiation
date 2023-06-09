<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Profil_user;

use DB;
use Illuminate\Http\Request;

class Compte_userController extends Controller
{

 


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
        $profil_users->pwd=Hash::make($request->pwd);
        $profil_users->save();
        
        return redirect('/admin/compte_user')->with('status','Ajouter  utilisateur avec  succes!');
    }

    public function compte_user(){
        $profil_user =  Profil_user::all();
        $profil_user = DB::table('profil_users')
            ->orderBy('id','DESC')
            ->get();
        return view ('admin.compte_user',compact('profil_user'));
    }

   
    
}
 