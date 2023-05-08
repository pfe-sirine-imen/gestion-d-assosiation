<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdherentsController;
use App\Http\Controllers\BailleurController;
use App\Http\Controllers\Admin\compte_userController;
use App\Http\Controllers\BotmanController;
use App\Http\Controllers\Admin\compte_bailleurController;

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
Route::controller(DashboardController::class)->group(function(){
    Route::get('/admin/dashboard','Index')->name('admindashboard');
      
});

Route::controller(Compte_userController::class)->group(function(){
    Route::get('/admin/compte_user','compte_user')->name('compte_user');
    Route::get('/ajouter/tratm','ajouter_tratm')->name('ajouter_tratm');
      
});

Route::controller(Compte_bailleurController::class)->group(function(){
    Route::get('/admin/compte_bailleur','compte_bailleur')->name('compte_bailleur');
      
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
      
});



require __DIR__.'/auth.php';
