<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdherentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);



Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);


    Route::get('listeadhernets', [AdherentsController::class, 'index1']);
    Route::post('ajouteradh', [AdherentsController::class, 'save1']);
    Route::get('supadh/{id}', [AdherentsController::class, 'destory1']);
    Route::post('update/{id}', [AdherentsController::class, 'update_trat1']);

    Route::get('listecaisse', [AdherentsController::class, 'index2']);
    Route::post('ajoutercaisse', [AdherentsController::class, 'save2']);
    Route::get('supcaisse/{id}', [AdherentsController::class, 'destory2']);
    Route::post('updatecaisse/{id}', [AdherentsController::class, 'update_tart2']);

    Route::get('listedons', [AdherentsController::class, 'index3']);
    Route::post('ajouterdon', [AdherentsController::class, 'save3']);
    Route::get('supdon/{id}', [AdherentsController::class, 'destory3']);
    Route::post('updatedon/{id}', [AdherentsController::class, 'update_trat3']);

    
});
/*Route::get('listeadhernets', [AdherentsController::class, 'index1']);
Route::post('ajouteradh', [AdherentsController::class, 'save1']);
Route::get('supadh/{id}', [AdherentsController::class, 'destory1']);
Route::post('update/{id}', [AdherentsController::class, 'update_trat1']);

Route::get('listecaisse', [AdherentsController::class, 'index2']);
Route::post('ajoutercaisse', [AdherentsController::class, 'save2']);
Route::get('supcaisse/{id}', [AdherentsController::class, 'destory2']);
Route::post('updatecaisse/{id}', [AdherentsController::class, 'update_tart2']);

Route::get('listedons', [AdherentsController::class, 'index3']);
Route::post('ajouterdon', [AdherentsController::class, 'save3']);
Route::get('supdon/{id}', [AdherentsController::class, 'destory3']);
Route::post('updatedon/{id}', [AdherentsController::class, 'update_trat3']);*/

Route::get('listedons', [AdherentsController::class, 'index3']);
