<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;


// Route::get('/', function () {//    return view('welcome');// });

Route::redirect('/', '/fr');
 
Route::group(['prefix'=> "{language}"], function(){

// un seul controlleur general est suffisant -> choix du modele suivant $request language
// un seul dossier blade est suffisant -> changement du view via la traduction des elements statiques
// les element dynamiques seront en parallele avec le ui suivant le travail duvcontrolleur

  //comming soon
  Route::get('/', function(){ return view('pages.lab.gsap'); })->name('coming');

  //  Route::get('/', function(){ return view('welcome');})->name('welcome');
 //commande
    Route::get('/commande', [CommandeController::class, 'index'])->name('commande.details');
 //notification de paiement
    Route::get('/paiement', function(){return view('paiement.details');})->name('paiement.details');
    Route::get('/paiement/notification', function(){return view('paiement.reussi');})->name('paiement.notification');
    Route::get('/paiement/reussi', function(){return view('paiement.reussi');})->name('paiement.reussi');
    Route::get('/paiement/erreur', function(){return view('paiement.erreur');})->name('paiement.erreur');
    Auth::routes();
  });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');