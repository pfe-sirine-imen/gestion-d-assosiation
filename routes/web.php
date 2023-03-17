<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdherentsController;
use App\Http\Controllers\BailleurController;
use App\Http\Controllers\Admin\compte_userController;
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




Route::controller(BailleurController::class)->group(function(){
    Route::get('/bailleur','Index' )->name('bailleur');
    Route::get('/profil_b','profilpage' )->name('profil_b');
    Route::get('/consulter_dons','consulterdons' )->name('dons_b');
    Route::get('/consulter_reunion','consulterreunion' )->name('reunion_b');
    Route::get('/consulter_evenement','consulterevenements' )->name('evenement_b');
    Route::get('/consulter_caisse','consultercaisse' )->name('caisse_b');
    Route::get('/consulter_projet','consulterprojet' )->name('projet_b');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','Index' )->name('Home');
});

Route::controller(AdherentsController::class)->group(function(){
    Route::get('/profil','profilpage' )->name('profil');
    Route::get('/adherents','adherentspage' )->name('adherents');
    Route::get('/reunion','reunionpage' )->name('reunion');
    Route::get('/evenement','evenementpage' )->name('evenement');
    Route::get('/projet','projetpage' )->name('projet');
    Route::get('/dons','donspage' )->name('dons');
    Route::get('/caisse','caissepage' )->name('caisse');
});


Route::controller(DashboardController::class)->group(function(){
    Route::get('/admin/dashboard','Index')->name('admindashboard');
      
});

Route::controller(Compte_userController::class)->group(function(){
    Route::get('/admin/compte_user','compte_user')->name('compte_user');
      
});

Route::controller(Compte_bailleurController::class)->group(function(){
    Route::get('/admin/compte_bailleur','compte_bailleur')->name('compte_bailleur');
      
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
      
});



require __DIR__.'/auth.php';
