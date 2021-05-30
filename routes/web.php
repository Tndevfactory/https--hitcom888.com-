<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::redirect('/', '/fr');
 

Route::group(['prefix'=> "{language}"], function(){

// un seul controlleur general est suffisant -> choix du modele suivant $request language
// un seul dossier blade est suffisant -> changement du view via la traduction des elements statiques
// les element dynamiques seront en parallele avec le ui suivant le travail duvcontrolleur



    Route::get('/', function(){
        return view('coming');
        // testing purpose
    })->name('coming');

    // Route::get('/', function(){
    //     return view('welcome');
    //     // testing purpose
    // })->name('welcome');

 //commande
    Route::get('/commande', [CommandeController::class, 'index'])->name('commande.details');

 //notification de paiement
    Route::get('/paiement', function(){
        return view('paiement.details');
        // testing purpose
    })->name('paiement.details');

    Route::get('/paiement/notification', function(){
        return view('paiement.reussi');
        // testing purpose
    })->name('paiement.notification');

    Route::get('/paiement/reussi', function(){
        return view('paiement.reussi');
        // testing purpose
    })->name('paiement.reussi');
   
    Route::get('/paiement/erreur', function(){
        return view('paiement.erreur');
        // testing purpose
    })->name('paiement.erreur');
   

     Auth::routes();
  
   


} );









// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');