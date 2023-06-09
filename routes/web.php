<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdherentsController;
use App\Http\Controllers\BailleurController;

use App\Http\Controllers\BotmanController;
use App\Http\Controllers\Admin\compte_bailleurController;
use App\Http\Controllers\Admin\compte_userController;
use App\Http\Controllers\Mail\WelcomeUserMail;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/botman',[BotmanController::class,'handle']);
Route::post('/botman',[BotmanController::class,'handle']);


//Route::get('/redirects',[HomeController::class,'index']);

Route::group(['middleware' => 'auth'], function () {
Route::controller(BailleurController::class)->group(function(){
    Route::get('/bailleur','Index' )->name('bailleur');
    Route::get('/profil_b','profilpage' )->name('profil_b');
    Route::post('/ajouterbailleur','ajouterbailleur' )->name('ajouterbaill');
    Route::get('/consulter_dons','consulterdons' )->name('dons_b');
    Route::get('/consulter_reunion','consulterreunion' )->name('reunion_b');
    Route::get('/consulter_evenement','consulterevenements' )->name('evenement_b');
    Route::get('/consulter_caisse','consultercaisse' )->name('caisse_b');
    Route::get('/consulter_projet','consulterprojet' )->name('projet_b');
});
});
//Route::middleware(['auth','role:user'])->group(function(){
Route::group(['middleware' => 'auth'], function () {
Route::controller(HomeController::class)->group(function(){
    Route::get('/','Index' )->name('Home');
    Route::get('/assosiation','ass' )->name('ass');
   
});


Route::controller(AdherentsController::class)->group(function(){
    Route::get('/profil','profilpage' )->name('profil');
    Route::post('/ajoutuser/trat','ajoutuser' )->name('ajoutuser');

   
    Route::get('/adherents','adherentspage' )->name('adherents');
    Route::get('/liste/adherents','listeadherents' )->name('listeadherents');
    Route::post('/ajouteradherents','ajouteradherents' )->name('ajouteradherents');
    Route::get('/update_adherents/{id}','update_adherents' )->name('update_adherents');
    Route::post('/update_adherents/trat','update_adherents_trat' )->name('update_adherents/trat');
    Route::get('/sup_adherents/{id}','sup_adherents' )->name('sup_adherents');

    Route::get('/reunion','reunionpage' )->name('reunion');
    Route::get('/pdf','pdf' )->name('pdf');

    Route::post('/ajouter/reunion','ajouter_reunion' )->name('ajouter_reunion');
    Route::get('/liste_reunion','liste_reunion' )->name('liste_reunion');
    Route::get('/update_reunion/{id}','update_reunion' )->name('update_reunion');
    Route::post('/update_reunion/trat','update_reunion_trat' )->name('update_reunion_trat');
    Route::get('/sup_reunion/{id}','sup_reunion' )->name('sup_reunion');


    Route::get('/evenement','evenementpage' )->name('evenement');
    Route::post('/ajouter_eve','ajouter_eve' )->name('ajouter_eve');
    Route::get('/liste_evenement','liste_evenement' )->name('liste_evenement');
    Route::get('/update_eve/{id}','update_eve' )->name('update_eve');
    Route::post('/update_eve/trat','update_eve_trat' )->name('update_eve/trat');
    Route::get('/sup_eve/{id}','sup_eve' )->name('sup_eve');


    Route::get('/evenement_bailleur','evenement_bailleur' )->name('evenement_bailleur');
    Route::get('/pdf_b','pdf_b' )->name('pdf_b');
    
    Route::post('/ajouter_eve_bailleur','ajouter_eve_bailleur' )->name('ajouter_eve_bailleur');
    Route::get('/liste_evenement_bailleur','liste_evenement_bailleur' )->name('liste_evenement_bailleur');
    Route::get('/update_eve_bailleur/{id}','update_eve_bailleur' )->name('update_eve_bailleur');
    Route::post('/update_eve_bailleur/trat','update_eve_bailleur_trat' )->name('update_eve_bailleur/trat');
    Route::get('/sup_eve_bailleur/{id}','sup_eve_bailleur' )->name('sup_eve_bailleur');


    Route::get('/projet','projetpage' )->name('projet');
    Route::post('ajouter_projet/trat','ajouter_projet_trat' )->name('ajouter_projet_trat');
    Route::get('/liste_projet','liste_projet' )->name('liste_projet');
    Route::get('/update_projet/{id}','update_projet' )->name('update_projet');
    Route::post('/update_projet/trat','update_projet_trat' )->name('update_projet_trat');
    Route::get('/sup_projet/{id}','sup_projet' )->name('sup_projet');
    

    Route::get('/dons','donspage' )->name('dons');
    Route::post('ajouter_don/trat','ajouter_don_trat' )->name('ajouter_don_trat');
    Route::get('/liste_don','liste_don' )->name('liste_don');
    Route::get('/update_don/{id}','update_don' )->name('update_don');
    Route::post('/update_don/trat','update_don_trat' )->name('update_don_trat');
    Route::get('/sup_don/{id}','sup_don' )->name('sup_don');

    
    Route::get('/caisse','caissepage' )->name('caisse');
    Route::post('ajouter_caisse','ajouter_caisse' )->name('ajouter_caisse');
    Route::get('/liste_caisse','liste_caisse' )->name('liste_caisse');
    Route::get('/update_caisse/{id}','update_caisse' )->name('update_caisse');
    Route::post('/update_caisse/trat','update_caisse_tart' )->name('update_caisse_tart');
    Route::get('/sup_caisse/{id}','sup_caisse' )->name('sup_caisse');

 
  });
});
Route::group(['middleware' => 'auth'], function () {
Route::controller(DashboardController::class)->group(function(){
    Route::get('/admin/dashboard','Index')->name('admindashboard');
   
   
});


Route::controller(Compte_userController::class)->group(function(){
    Route::get('/admin/compte_user','compte_user')->name('compte_user');
    Route::get('/ajouteruser',function(){
        return view('admin.ajouteruser');
    });
    Route::post('/admin/compte_user','ajouteruser')->name('/admin/compte_user');
   


      
});

Route::controller(Compte_bailleurController::class)->group(function(){
    Route::get('/admin/compte_bailleur','compte_bailleur')->name('compte_bailleur');
    Route::get('/ajouterbail',function(){
        return view('admin.ajouterbail');
    });
    Route::post('/admin/compte_bailleur','ajouterbail')->name('/admin/compte_bailleur');
    
   
      
});


Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');

    


   
    Route::get('/listeA','listeA')->name('liste_A');
    Route::get('/A',function(){
        return view('admin.A');
    });
    Route::post('/admin/A','A')->name('/admin/A');
    Route::get('/admin/update_A/{id}','update_A' )->name('admin.update_A');
    Route::post('/admin/update_A/trat','update_A_trat' )->name('/admin/update_A_trat');
    Route::get('/admin/sup_A/{id}','sup_A' )->name('admin.sup_A');



    Route::get('/listeR','listeR')->name('liste_R');
    Route::get('/R',function(){
        return view('admin.R');
    });
    Route::post('/admin/R','R')->name('/admin/R');
    Route::get('/admin/update_R/{id}','update_R' )->name('/admin/update_R');
    Route::post('/admin/update_R/trat','update_R_trat' )->name('/admin/update_R_trat');
    Route::get('/admin/sup_R/{id}','sup_R' )->name('/admin/sup_R');




    Route::get('/listeD','listeD')->name('liste_D');
    Route::get('/D',function(){
        return view('admin.D');
    });
    Route::post('/admin/D','D')->name('/admin/D');
    Route::get('/admin/update_D/{id}','update_D' )->name('/admin/update_D');
    Route::post('/admin/update_D/trat','update_D_trat' )->name('/admin/update_D_trat');
    Route::get('/admin/sup_D/{id}','sup_D' )->name('/admin/sup_D');



    
    Route::get('/listeC','listeC')->name('liste_C');
    Route::get('/C',function(){
        return view('admin.C');
    });
    Route::post('/admin/C','C')->name('/admin/C');
    Route::get('/admin/update_C/{id}','update_C' )->name('/admin/update_C');
    Route::post('/admin/update_C/trat','update_C_tart' )->name('/admin/update_C_tart');
    Route::get('/admin/sup_C/{id}','sup_C' )->name('/admin/sup_C');




    Route::get('/listeE','listeE')->name('liste_E');
    Route::get('/E',function(){
        return view('admin.E');
    });
    Route::post('/admin/E','E')->name('/admin/E');
    Route::get('/admin/update_E/{id}','update_E' )->name('/admin/update_E');
    Route::post('/admin/update_E/trat','update_E_trat' )->name('/admin/update_E_trat');
    Route::get('/admin/sup_E/{id}','sup_E' )->name('/admin/sup_E');



   



    Route::get('/listeP','listeP')->name('liste_P');
    Route::get('/P',function(){
        return view('admin.P');
    });
    Route::post('/admin/P','P')->name('/admin/P');
    Route::get('/admin/update_P/{id}','update_P' )->name('/admin/update_P');
    Route::post('/admin/update_P/trat','update_P_trat' )->name('/admin/update_P_trat');
    Route::get('/admin/sup_P/{id}','sup_P' )->name('/admin/sup_P');

    
   
});

});


require __DIR__.'/auth.php';
