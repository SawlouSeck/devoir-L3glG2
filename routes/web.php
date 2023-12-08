<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/apprenant',[ApprenantController::class, 'liste_apprenant']);
Route::get('/ajouter',[ApprenantController::class, 'ajouter_apprenant']);
Route::get('/formation',[ApprenantController::class, 'liste_formation']);
Route::post('/ajouter/traitement',[ApprenantController::class, 'traitement_liste_ajouter']);

