<?php

namespace App\Http\Controllers;

use App\Models\Adherents;
use App\Models\Profil_user;
use App\Models\Events;
use App\Models\Don;
use App\Models\Projet;
use App\Models\Evenement;
use App\Models\Reunion;
use App\Models\Caisse;

use Illuminate\Http\Request;

class AdherentsController extends Controller
{
    public function profilpage(){
        return view ('user_template.profil');
    }
    
    public function ajoutuser(Request  $request){
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
        
        return redirect('/profil')->with('status','Modifier utilisateur  succes!');
    }



    public function adherentspage(){
        return view ('user_template.adherents');
    }



    public function  listeadherents(Request $request){
        if($request->has('search')){
            $adherent = Adherents::where('nom','LIKE','%'.$request->search.'%')->paginate(4);

        }else{
            $adherent =  Adherents::paginate(4);
        }
        
        return view ('user_template.liste' ,compact('adherent'));
    }
    public function index1()
    {
        $adherent = Adherents::all();
        return response()->json($adherent);
    }
   
   public function  ajouteradherents(Request  $request){
    
        $request->validate([
            'nom' =>'required|string',
            'prenom'=>'required|string',
            'mail'=>'required|email',
            'pwd'=>'required|min:6|',
            'pays'=>'required|string',
            'age'=>'required',
            'tel'=>'required|max:8',
            'situation'=>'required',
            'code'=>'required',
            'capital'=>'required',
            'niveau'=>'required|string',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'copie'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);

        $adherents= new Adherents();
        $adherents->nom=$request->nom;
        $adherents->prenom=$request->prenom;
        $adherents->mail=$request->mail;
        $adherents->pwd=$request->pwd;
        $adherents->pays=$request->pays;
        $adherents->age=$request->age;
        $adherents->tel=$request->tel;
        $adherents->situation=$request->situation;
        $adherents->niveau=$request->niveau;
        $adherents->code=$request->code;
        $adherents->capital=$request->capital;
        $adherents->copie=$request->copie;
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('image/',$filename);
            $adherents->photo =$filename;   
        }
            $adherents->save();  
            
            return redirect('/adherents')->with('status','ajouter adherents succes!');
 
    }



    public function  save1(Request  $request){
    
        $request->validate([
            'nom' =>'required|string',
            'prenom'=>'required|string',
            'mail'=>'required|email',
            'pwd'=>'required|min:6|',
            'pays'=>'required|string',
            'age'=>'required',
            'tel'=>'required|max:8',
            'situation'=>'required',
            'code'=>'required',
            'capital'=>'required',
            'niveau'=>'required|string',
            //'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'copie'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);

        $adherents= new Adherents();
        $adherents->nom=$request->nom;
        $adherents->prenom=$request->prenom;
        $adherents->mail=$request->mail;
        $adherents->pwd=$request->pwd;
        $adherents->pays=$request->pays;
        $adherents->age=$request->age;
        $adherents->tel=$request->tel;
        $adherents->situation=$request->situation;
        $adherents->niveau=$request->niveau;
        $adherents->code=$request->code;
        $adherents->capital=$request->capital;
        //$adherents->copie=$request->copie;
        /*if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('image/',$filename);
            $adherents->photo =$filename;   
        }*/
            $adherents->save();  
            return response()->json(['status' => 'ajouter adherents succes!'],200);
            
 
    }
   

   public function update_adherents($id){
    $adherents =Adherents::findOrFail($id);
    return view ('user_template.update_adherents',compact('adherents'));
    }
   
    
    public function update_adherents_trat(Request $request){
        $request->validate([
            'nom' =>'required|string',
            'prenom'=>'required|string',
            'mail'=>'required|email',
            'pwd'=>'required',
            'pays'=>'required|string',
            'age'=>'required',
            'tel'=>'required|max:8',
            'situation'=>'required',
            'code'=>'required',
            'capital'=>'required',
            'niveau'=>'required|string',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'copie'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $adherents=  Adherents::find($request->id);
        $adherents->nom=$request->nom;
        $adherents->prenom=$request->prenom;
        $adherents->mail=$request->mail;
        $adherents->pwd=$request->pwd;
        $adherents->pays=$request->pays;
        $adherents->age=$request->age;
        $adherents->tel=$request->tel;
        $adherents->situation=$request->situation;
        $adherents->niveau=$request->niveau;
        $adherents->code=$request->code;
        $adherents->capital=$request->capital;
        $adherents->copie=$request->copie;
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('image/',$filename);
            $adherents->photo =$filename;   
        }
        
        $adherents->update();
        return redirect('/liste/adherents')->with('status','Modifier adherents succes!');
    }

    public function update1($id){
        $adherents =Adherents::findOrFail($id);
        return response()->json(['status' => 'Modifier adherents succes!'],200);
        }
       
        
        public function update_trat1(Request $request){
            $request->validate([
                'nom' =>'required|string',
                'prenom'=>'required|string',
                'mail'=>'required|email',
                'pwd'=>'required',
                'pays'=>'required|string',
                'age'=>'required',
                'tel'=>'required|max:8',
                'situation'=>'required',
                //'code'=>'required',
                'capital'=>'required',
                'niveau'=>'required|string',
                
            ]);
            $adherents=  Adherents::find($request->id);
            $adherents->nom=$request->nom;
            $adherents->prenom=$request->prenom;
            $adherents->mail=$request->mail;
            $adherents->pwd=$request->pwd;
            $adherents->pays=$request->pays;
            $adherents->age=$request->age;
            $adherents->tel=$request->tel;
            $adherents->situation=$request->situation;
            $adherents->niveau=$request->niveau;
            //$adherents->code=$request->code;
            $adherents->capital=$request->capital;
         
            $adherents->update();
            return response()->json(['status' => 'Modifier adherents succes!'],200);
        }


    public function  sup_adherents($id){
        $adherents =Adherents::findOrFail($id);
        $adherents->delete();
        return redirect('/liste/adherents')->with('status','Supprimer adherents succes!');
    }

    public function  destory1($id){
        $adherents =Adherents::findOrFail($id);
        $adherents->delete();
        return response()->json(['status' => 'Supprimer adherents succes!'],200);
    }

    public function ajouter_reunion(Request $request){
        $request->validate([
            'titre' =>'required|string',
            'invite' =>'required',
            'mail' =>'required|email',
            'date' =>'required',
            'heure' =>'required',
            'place' =>'required|string',
            'rendu' =>'required',
             
        ]);
       $reunion = new Reunion();
       $reunion->titre=$request->titre;
       $reunion->invite=$request->invite;
       $reunion->mail=$request->mail;
       $reunion->date=$request->date;
       $reunion->heure=$request->heure;
       $reunion->place=$request->place;
       if($request->hasFile('rendu')){
        $file = $request->file('rendu');
        $extension = $file->getClientOriginalExtension();
        $filename= time().'.'.$extension;
        $file->move('image/',$filename);
        $reunion->rendu =$filename;   
        }
       $reunion->save();
       return redirect('/reunion')->with('status','Ajouter le reunion avec succes!');
    }
    public function  liste_reunion(Request $request){
        if($request->has('search')){
            $reunions = Reunion::where('titre','LIKE','%'.$request->search.'%')->paginate(4);
        }else{
            $reunions =  Reunion::paginate(4);
        }
        return view ('user_template.liste_reunion' ,compact('reunions'));
    }
    public function  update_reunion($id){
        $reunions = Reunion::find($id);
        return view ('user_template.update_reunion',compact('reunions'));
    }
    public function  update_reunion_trat(Request $request){
        $request->validate([
            'titre' =>'required|string',
            'invite' =>'required',
            'mail' =>'required|email',
            'date' =>'required',
            'heure' =>'required',
            'place' =>'required|string',
            'rendu' =>'required',
             
        ]);
        $reunion =  Reunion::find($request->id);
        $reunion->titre=$request->titre;
        $reunion->invite=$request->invite;
        $reunion->mail=$request->mail;
        $reunion->date=$request->date;
        $reunion->heure=$request->heure;
        $reunion->place=$request->place;
        if($request->hasFile('rendu')){
            $file = $request->file('rendu');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('image/',$filename);
            $reunion->rendu =$filename;   
        }
       
        $reunion->update();
        return redirect('/liste_reunion')->with('status','Modifier le reunion avec succes!');
    }
    public function  sup_reunion($id){
        $reunion = Reunion::find($id);
        $reunion->delete();
        return redirect('/liste_reunion')->with('status','Supprimer le reunion avec succes!');
    }
  
    public function reunionpage(){
        return view ('user_template.reunion');
    }

    public function evenementpage(){
        
        return view ('user_template.evenement');
    }

    public function ajouter_eve(Request  $request){
       $request->validate([
            'titre' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'objectif' => 'required',
            'lieu' => 'required|string',
       ]);
       
        $events= new Events();
        $events->titre = $request->titre;
        $events->responsable = $request->responsable;
        $events->date_debut = $request->date_debut;
        $events->date_fin = $request->date_fin;
        $events->objectif = $request->objectif;
        $events->lieu = $request->lieu;
        $events->save();
        
        return redirect('/evenement')->with('status','ajouter les evenement avec   succes!');
       
    }
   
    public function liste_evenement(Request $request){
        if($request->has('search')){
            $event = Events::where('titre','LIKE','%'.$request->search.'%')->paginate(4);

        }else{
            $event = Events::paginate(4);
        }
        
        return view ('user_template.liste_evenement',compact('event'));
        
    }

    public function update_eve($id){
        $event = Events::findOrFail($id);
        return view ('user_template.update_evenement',compact('event'));
        
    }
    public function update_eve_trat(Request $request){
        $request->validate([
            'titre' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'objectif' => 'required',
            'lieu' => 'required|string',
       ]);
       $event=  Events::find($request->id);
        $event->titre = $request->titre;
        $event->responsable = $request->responsable;
        $event->date_debut = $request->date_debut;
        $event->date_fin = $request->date_fin;
        $event->objectif = $request->objectif;
        $event->lieu = $request->lieu;
        $event->update();
        return redirect('/liste_evenement')->with('status','Modifier  les evenement avec   succes!');
    }
    
    public function sup_eve($id){
        $events = Events::find($id);
        $events->delete();
        return redirect('/liste_evenement')->with('status','Supprimer un evenement avec succes!');
    }

    public function projetpage(){
        return view ('user_template.projet');
        
    }
    
    public function ajouter_projet_trat(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'objectif' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'montant' => 'required',
            'etat' => 'required',
        ]);
        $projet= new Projet();
        $projet->nom = $request->nom;
        $projet->objectif = $request->objectif;
        $projet->responsable = $request->responsable;
        $projet->date_debut = $request->date_debut;
        $projet->date_fin = $request->date_fin;
        $projet->montant = $request->montant;
        $projet->etat = $request->etat;
        $projet->save();

        return redirect('/projet')->with('status','Ajouter un projet avec succes!');
    }

    public function liste_projet(Request $request){
        if($request->has('search')){
            $projets = Projet::where('nom','LIKE','%'.$request->search.'%')->paginate(4);

        }else{
            $projets = Projet::paginate(4);
        }
       
        return view ('user_template.liste_projet',compact('projets'));
    }
    public function update_projet($id){
        $projets = Projet::find($id);
        return view ('user_template.update_projet',compact('projets'));
    }
    public function update_projet_trat(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'objectif' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'montant' => 'required',
            'etat' => 'required',
        ]);
        $projet= Projet::find($request->id);
        $projet->nom = $request->nom;
        $projet->objectif = $request->objectif;
        $projet->responsable = $request->responsable;
        $projet->date_debut = $request->date_debut;
        $projet->date_fin = $request->date_fin;
        $projet->montant = $request->montant;
        $projet->etat = $request->etat;
        $projet->update();
        return redirect('/liste_projet')->with('status','Modifier un projet avec succes!');
    }
    public function sup_projet($id){
        $projet = Projet::find($id);
        $projet->delete();
        return redirect('/liste_projet')->with('status','supprimer un projet avec succes!');
    }
    
    public function donspage(){
        return view ('user_template.dons');
    }
    public function ajouter_don_trat(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'destination' => 'required|string',
            'nature' => 'required|string',
            'donateur' => 'required|string',
            'type' => 'required|string',
            'date' => 'required',
            'montant' => 'required',
       ]);
        $don= new Don();
        $don->nom = $request->nom;
        $don->destination = $request->destination;
        $don->nature = $request->nature;
        $don->donateur = $request->donateur;
        $don->type = $request->type;
        $don->date = $request->date;
        $don->montant = $request->montant;
        $don->save();

        return redirect('/dons')->with('status','Ajouter un don avec succes!');

    }


    public function save3(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'destination' => 'required|string',
            'nature' => 'required|string',
            'donateur' => 'required|string',
            'type' => 'required|string',
            'date' => 'required',
            'montant' => 'required',
       ]);
        $don= new Don();
        $don->nom = $request->nom;
        $don->destination = $request->destination;
        $don->nature = $request->nature;
        $don->donateur = $request->donateur;
        $don->type = $request->type;
        $don->date = $request->date;
        $don->montant = $request->montant;
        $don->save();

        return response()->json(['status' => 'ajouter un  don avec succes!'],200);

    }
    public function liste_don(Request $request){
        if($request->has('search')){
            $dons = Don::where('nom','LIKE','%'.$request->search.'%')->paginate(4);

        }else{
            $dons = Don::paginate(4);
        }
        
        return view ('user_template.liste_don',compact('dons'));
    }

    public function index3()
    {
        $dons = Don::all();
        return response()->json($dons);
    }

    public function update_don($id){
        $dons = Don::find($id);
        return view ('user_template.update_don',compact('dons'));
    }
    
    public function update_don_trat(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'destination' => 'required|string',
            'nature' => 'required|string',
            'donateur' => 'required|string',
            'type' => 'required|string',
            'date' => 'required',
            'montant' => 'required',
       ]);
       $don=  Don::find($request->id);
        $don->nom = $request->nom;
        $don->destination = $request->destination;
        $don->nature = $request->nature;
        $don->donateur = $request->donateur;
        $don->type = $request->type;
        $don->date = $request->date;
        $don->montant = $request->montant;
        $don->update();

        return redirect('/liste_don')->with('status','Modifier un don avec succes!');
    }

    public function update3($id){
        $dons = Don::find($id);
        return response()->json(['status' => 'Modifier un don avec succes!'],200);
    }
    
    public function update_trat3(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'destination' => 'required|string',
            'nature' => 'required|string',
            'donateur' => 'required|string',
            'type' => 'required|string',
            'date' => 'required',
            'montant' => 'required',
       ]);
       $don=  Don::find($request->id);
        $don->nom = $request->nom;
        $don->destination = $request->destination;
        $don->nature = $request->nature;
        $don->donateur = $request->donateur;
        $don->type = $request->type;
        $don->date = $request->date;
        $don->montant = $request->montant;
        $don->update();

        return response()->json(['status' => 'Modifier un don avec succes!'],200);
    }

    public function sup_don($id){
        $don = Don::find($id);
        $don->delete();
        return redirect('/liste_don')->with('status','supprimer un don avec succes!');

    }
    
    public function destory3($id){
        $don = Don::find($id);
        $don->delete();
        return response()->json(['status' => 'status','Supprimer un don avec succes!'],200);

    }

    public function caissepage(){
        return view ('user_template.caisse');
    }

    public function ajouter_caisse(Request  $request){
        $request->validate([
            'cin' => 'required|min:6|max:6',
            'nom' => 'required|string',
            'activite' => 'required|string',
            'responsable' => 'required|string',
            'date' => 'required',
            'benefice' => 'required|string',
            'heure' => 'required',
            'solde' => 'required',
            'total' => 'required',     
       ]);
       $caisse= new Caisse();
       $caisse->cin = $request->cin;
       $caisse->nom = $request->nom;
       $caisse->activite = $request->activite;
       $caisse->responsable = $request->responsable;
       $caisse->date = $request->date;
       $caisse->benefice = $request->benefice;
       $caisse->heure = $request->heure;
       $caisse->solde = $request->solde;
       $caisse->total = $request->total;
       $caisse->save();
       return redirect('/caisse')->with('status','ajouter les operation des caisses  avec   succes!');
    }
    

    public function save2(Request  $request){
        $request->validate([
            'cin' => 'required|min:6|max:6',
            'nom' => 'required|string',
            'activite' => 'required|string',
            'responsable' => 'required|string',
            'date' => 'required',
            'benefice' => 'required|string',
            'heure' => 'required',
            'solde' => 'required',
            'total' => 'required',     
       ]);
       $caisse= new Caisse();
       $caisse->cin = $request->cin;
       $caisse->nom = $request->nom;
       $caisse->activite = $request->activite;
       $caisse->responsable = $request->responsable;
       $caisse->date = $request->date;
       $caisse->benefice = $request->benefice;
       $caisse->heure = $request->heure;
       $caisse->solde = $request->solde;
       $caisse->total = $request->total;
       $caisse->save();
       return response()->json(['status' => 'ajouter caisse succes!'],200);
    }

    public function liste_caisse(Request $request){
        if($request->has('search')){
            $caisses = Caisse::where('cin','LIKE','%'.$request->search.'%')->paginate(4);

        }else{
            $caisses = Caisse::paginate(4);
        }
        
        return view ('user_template.liste_caisse',compact('caisses'));
    }

    public function index2()
    {
        $caisses = Caisse::all();
        return response()->json($caisses);
    }

    public function update_caisse($id){
        $caisses =Caisse::findOrFail($id);
        return view ('user_template.update_caisse',compact('caisses'));
    }
    
    public function  update_caisse_tart(Request $request){
        $request->validate([
            'cin' => 'required|min:6|max:6|integer',
            'nom' => 'required|string',
            'activite' => 'required|string',
            'responsable' => 'required|string',
            'date' => 'required',
            'benefice' => 'required|string',
            'heure' => 'required',
            'solde' => 'required',
            'total' => 'required',     
       ]);
       $caisse= Caisse::find($request->id);
       $caisse->cin = $request->cin;
       $caisse->nom = $request->nom;
       $caisse->activite = $request->activite;
       $caisse->responsable = $request->responsable;
       $caisse->date = $request->date;
       $caisse->benefice = $request->benefice;
       $caisse->heure = $request->heure;
       $caisse->solde = $request->solde;
       $caisse->total = $request->total;
       $caisse->update();
       return redirect('/liste_caisse')->with('status','Modifier les operation des caisses  avec   succes!');
    }
    

    public function update2($id){
        $caisses =Caisse::findOrFail($id);
        return response()->json(['status' => 'status','Modifier les operation des caisses  avec succes!'],200);
    }
    
    public function  update_tart2(Request $request){
        $request->validate([
            'cin' => 'required|integer',
            'nom' => 'required|string',
            'activite' => 'required|string',
            'responsable' => 'required|string',
            'date' => 'required',
            'benefice' => 'required|string',
            'heure' => 'required',
            'solde' => 'required',
            'total' => 'required',     
       ]);
       $caisse= Caisse::find($request->id);
       $caisse->cin = $request->cin;
       $caisse->nom = $request->nom;
       $caisse->activite = $request->activite;
       $caisse->responsable = $request->responsable;
       $caisse->date = $request->date;
       $caisse->benefice = $request->benefice;
       $caisse->heure = $request->heure;
       $caisse->solde = $request->solde;
       $caisse->total = $request->total;
       $caisse->update();
       return response()->json(['status' => 'status','Modifier les operation des caisses  avec succes!'],200);
    }

    public function sup_caisse($id){
        $caisse = Caisse::find($id);
        $caisse->delete();
        return redirect('/liste_caisse')->with('status','Supprimer un les operation de caisse  avec succes!');
    }

    public function destory2($id){
        $caisse = Caisse::find($id);
        $caisse->delete();
        return response()->json(['status' => 'status','Supprimer un les operation de caisse  avec succes!'],200);
      
    }
   

    


    public function evenement_bailleur(){
        return view ('user_template.evenement_bailleur');
    }
    public function ajouter_eve_bailleur(Request  $request){
        $request->validate([
             'titre' => 'required|string',
             'responsable' => 'required|string',
             'date_debut' => 'required',
             'date_fin' => 'required',
             'lieu' => 'required|string',
             'budget' => 'required',
             'objectif'=> 'required',
             'facture' => 'required',
        ]);
        
         $even= new Evenement();
         $even->titre = $request->titre;
         $even->responsable = $request->responsable;
         $even->date_debut = $request->date_debut;
         $even->date_fin = $request->date_fin;
         $even->lieu = $request->lieu;
         $even->budget = $request->budget;
         $even->objectif = $request->objectif;
         if($request->hasFile('facture')){
            $file = $request->file('facture');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('image/',$filename);
            $even->facture =$filename;   
         }
         $even->save();
         
         return redirect('/evenement_bailleur')->with('status','ajouter les evenement avec   succes!');
        
    }
    public function liste_evenement_bailleur(Request $request){
        if($request->has('search')){
            $evens = Evenement::where('titre','LIKE','%'.$request->search.'%')->paginate(4);

        }else{
            $evens = Evenement::paginate(4);
        }
        
        return view ('user_template.liste_evenement_bailleur',compact('evens'));
    }
    

    public function update_eve_bailleur($id){
        $even = Evenement::findOrFail($id);
        return view ('user_template.update_evenement_bailleur',compact('even'));
        
    }
    public function update_eve_bailleur_trat(Request $request){
        $request->validate([
            'titre' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'lieu' => 'required|string',
            'budget' => 'required',
            'objectif' => 'required',
            'facture' => 'required',
    ]);
        $evens=  Evenement::find($request->id);
        $evens->titre = $request->titre;
        $evens->responsable = $request->responsable;
        $evens->date_debut = $request->date_debut;
        $evens->date_fin = $request->date_fin;
        $evens->lieu = $request->lieu;
        $evens->budget = $request->budget;
        $evens->objectif = $request->objectif;
        if($request->hasFile('facture')){
            $file = $request->file('facture');
            $extension = $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('image/',$filename);
            $evens->facture =$filename;   
        }
        $evens->update();
       
        return redirect('/liste_evenement_bailleur')->with('status','Modifier  les evenement avec   succes!');
    }

    public function sup_eve_bailleur($id){
        $evens = Evenement::find($id);
        $evens->delete();
        return redirect('/liste_evenement_bailleur')->with('status','Supprimer un evenement avec succes!');
    }

}
