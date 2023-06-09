<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Models\User;
use App\Models\Reunion;
use App\Models\Adherents;
use App\Models\Events;
use App\Models\Projet;
use App\Models\Don;
use App\Models\Caisse;


class AdminController extends Controller
{
    public function Index(){
        return view('admin.dashboard_admin');
    }


 
    public function  listeA(Request $request){
        if($request->has('search')){
            $adherent = Adherents::where('nom','LIKE','%'.$request->search.'%')->paginate(10);

        }else{
            $adherent = DB::table('adherents')
            ->orderBy('id','DESC')
            ->paginate(10);
        }
        
        return view ('admin.listeA' ,compact('adherent'));
    }
  
   public function  A(Request  $request){
    
        $request->validate([
            'nom' =>'required|string',
            'prenom'=>'required|string',
            'mail'=>'required|email',
            'pwd'=>'required',
            'pays'=>'required|string',
            'age'=>'required|date',
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
        $adherents->pwd=Hash::make($request->pwd);
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
            
            return redirect('/listeA')->with('status','ajouter adherent succes!');
 
    }


   public function update_A($id){
    $adherents =Adherents::findOrFail($id);
    return view ('admin.update_A',compact('adherents'));
    }
   
    
    public function update_A_trat(Request $request){
        $request->validate([
            'nom' =>'required|string',
            'prenom'=>'required|string',
            'mail'=>'required|email',
            'pwd'=>'required',
            'pays'=>'required|string',
            'age'=>'required|date',
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
        $adherents->pwd=Hash::make($request->pwd);
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
        return redirect('/listeA')->with('status','Modifier adherent succes!');
    }

   


    public function  sup_A($id){
        $adherents =Adherents::findOrFail($id);
        $adherents->delete();
        return redirect('/listeA')->with('status','Supprimer adherent succes!');
    }



    public function R(Request $request){
        $request->validate([
            'titre' =>'required|string',
            'invite' =>'required',
            'mail' =>'required|email',
            'date' =>'required|date',
            'heure' =>'required',
            'place' =>'required|string',
            //'rendu' =>'required',
             
        ]);
       $reunion = new Reunion();
       $reunion->titre=$request->titre;
       $reunion->invite=$request->invite;
       $reunion->mail=$request->mail;
       $reunion->date=$request->date;
       $reunion->heure=$request->heure;
       $reunion->place=$request->place;
       //$reunion->rendu=$request->rendu;
       $reunion->save();
       return redirect('/listeR')->with('status','Ajouter le reunion avec succes!');
    }

    public function  listeR(Request $request){
        if($request->has('search')){
            $reunions = Reunion::where('titre','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
            $reunions =  DB::table('reunions')
            ->orderBy('id','DESC')
            ->paginate(10);
        }
        return view ('admin.listeR' ,compact('reunions'));
    }

    public function  update_R($id){
        $reunions = Reunion::find($id);
        return view ('admin.update_R',compact('reunions'));
    }

    public function  update_R_trat(Request $request){
        $request->validate([
            'titre' =>'required|string',
            'invite' =>'required',
            'mail' =>'required|email',
            'date' =>'required|date',
            'heure' =>'required',
            'place' =>'required|string',
            //'rendu' =>'required',
             
        ]);
        $reunion =  Reunion::find($request->id);
        $reunion->titre=$request->titre;
        $reunion->invite=$request->invite;
        $reunion->mail=$request->mail;
        $reunion->date=$request->date;
        $reunion->heure=$request->heure;
        $reunion->place=$request->place;
        //$reunion->rendu=$request->rendu;
        $reunion->update();
        return redirect('/listeR')->with('status','Modifier le reunion avec succes!');
    }
    public function  sup_R($id){
        $reunion = Reunion::find($id);
        $reunion->delete();
        return redirect('/listeR')->with('status','Supprimer le reunion avec succes!');
    }
  

    public function pdf(){
        $reunion = Reunion::all();
        view()->share('reunion', $reunion);
        //$pdf = PDF::loadView('user_template.pdf', compact('reunion'));

        $pdf = PDF::loadView('user_template.pdf',$reunion->toArray())->output();
        //return $pdf->download($reunion->titre . '_' . $reunion->invite .'.pdf');
        return response()->streamDownload(
            fn () => print($pdf),
            "Compterndurenuion.pdf"
       );
    }



    public function E(Request  $request){
        $request->validate([
             'titre' => 'required|string',
             'responsable' => 'required|string',
             'date_debut' => 'required|date',
             'date_fin' => 'required|date|after_or_equal:date_debut',
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
         
         return redirect('/listeE')->with('status','ajouter les evenement avec   succes!');
        
     }
    
     public function listeE(Request $request){
         if($request->has('search')){
             $event = Events::where('titre','LIKE','%'.$request->search.'%')->paginate(10);
 
         }else{
             $event = DB::table('events')
             ->orderBy('id','DESC')
             ->paginate(10);
         }
         
         return view ('admin.listeE',compact('event'));
         
     }
 
     public function update_E($id){
         $event = Events::findOrFail($id);
         return view ('admin.update_E',compact('event'));
         
     }
     public function update_E_trat(Request $request){
         $request->validate([
             'titre' => 'required|string',
             'responsable' => 'required|string',
             'date_debut' => 'required|date',
             'date_fin' => 'required|date|after_or_equal:date_debut',
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
         return redirect('/listeE')->with('status','Modifier  les evenement avec   succes!');
     }
     
     public function sup_E($id){
         $events = Events::find($id);
         $events->delete();
         return redirect('/listeE')->with('status','Supprimer un evenement avec succes!');
     }


     public function P(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'objectif' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
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

        return redirect('/listeP')->with('status','Ajouter un projet avec succes!');
    }

    public function listeP(Request $request){
        if($request->has('search')){
            $projets = Projet::where('nom','LIKE','%'.$request->search.'%')->paginate(10);

        }else{
            $projets = DB::table('projets')
            ->orderBy('id','DESC')
            ->paginate(10);
        }
       
        return view ('admin.listeP',compact('projets'));
    }
    public function update_P($id){
        $projets = Projet::find($id);
        return view ('admin.update_P',compact('projets'));
    }
    public function update_P_trat(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'objectif' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
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
        return redirect('/listeP')->with('status','Modifier un projet avec succes!');
    }
    public function sup_P($id){
        $projet = Projet::find($id);
        $projet->delete();
        return redirect('/listeP')->with('status','supprimer un projet avec succes!');
    }
    

    public function D(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'destination' => 'required|string',
            'nature' => 'required|string',
            'donateur' => 'required|string',
            'type' => 'required|string',
            'date' => 'required|date',
            'montant' => 'required',
            'bailleur_id'=>'required',
       ]);
        $don= new Don();
        $don->nom = $request->nom;
        $don->destination = $request->destination;
        $don->nature = $request->nature;
        $don->donateur = $request->donateur;
        $don->type = $request->type;
        $don->date = $request->date;
        $don->montant = $request->montant;
        $don->bailleur_id=$request->bailleur_id;
        $don->save();

        return redirect('/listeD')->with('status','Ajouter un don avec succes!');

    }



    
    public function listeD(Request $request){
        if($request->has('search')){
            $dons = Don::where('nom','LIKE','%'.$request->search.'%')->paginate(10);

        }else{
            $dons = DB::table('dons')
            ->orderBy('id','DESC')
            ->paginate(10);
        }
        
        return view ('admin.listeD',compact('dons'));
    }

   

    public function update_D($id){
        $dons = Don::find($id);
        return view ("admin.update_D",compact('dons'));
        
    }
    
    public function update_D_trat(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'destination' => 'required|string',
            'nature' => 'required|string',
            'donateur' => 'required|string',
            'type' => 'required|string',
            'date' => 'required|date',
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

        return redirect('/listeD')->with('status','Modifier un don avec succes!');
    }

   
   
    public function sup_D($id){
        $don = Don::find($id);
        $don->delete();
        return redirect('/listeD')->with('status','supprimer un don avec succes!');

    }
    
  


    public function C(Request  $request){
        $request->validate([
            'cin' => 'required|integer',
            'nom' => 'required|string',
            'activite' => 'required|string',
            'responsable' => 'required|string',
            'date' => 'required|date',
            'benefice' => 'required|string',
            'heure' => 'required',
            //'solde' => 'required',
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
       //$caisse->solde = $request->solde;
       $caisse->total = $request->total;
       $caisse->save();
       return redirect('/listeC')->with('status','ajouter les operation des caisses  avec   succes!');
    }
    



    public function listeC(Request $request){
        if($request->has('search')){
            $caisses = Caisse::where('cin','LIKE','%'.$request->search.'%')->paginate(10);

        }else{
            
            $caisses = DB::table('caisses')
            ->orderBy('id','DESC')
            ->paginate(10);
        }
        
        return view ('admin.listeC',compact('caisses'));
    }


    public function update_C($id){
        $caisses =Caisse::findOrFail($id);
        return view ('admin.update_C',compact('caisses'));
    }
    
    public function  update_C_tart(Request $request){
        $request->validate([
            'cin' => 'required|integer',
            'nom' => 'required|string',
            'activite' => 'required|string',
            'responsable' => 'required|string',
            'date' => 'required|date',
            'benefice' => 'required|string',
            'heure' => 'required',
            //'solde' => 'required',
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
       //$caisse->solde = $request->solde;
       $caisse->total = $request->total;
       $caisse->update();
       return redirect('/listeC')->with('status','Modifier les operation des caisses  avec   succes!');
    }
    


    public function sup_C($id){
        $caisse = Caisse::find($id);
        $caisse->delete();
        return redirect('/listeC')->with('status','Supprimer un les operation de caisse  avec succes!');
    }





    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
