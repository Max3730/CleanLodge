<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Admin\ProprietaireController as AdminProprietaireController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/accueil', function(){
    return view('accueil');
})->middleware(['auth', 'verified'])->name('accueil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/statut', function(){
    return view('statut');
})->middleware(['auth', 'verified'])->name('statut');
Route::get('/proprio', function(){
    return view('espace.proprietaire');
})->middleware(['auth', 'verified'])->name('proprio');

Route::get('/create', function(){
    return view('creation');
})->middleware(['auth', 'verified'])->name('create');

Route::get('/parametre', function(){
    return view('parametre.parametre');
})->middleware(['auth', 'verified'])->name('parametre');



require __DIR__.'/auth.php';
