<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::resource('/team', TeamController::class);
Route::resource('/continent', ContinentController::class);


// Backoffice Team
Route::get('/backoffice',[TeamController::class,'backoffice'])->name('backoffice');

// Backoffice Show Team

Route::get('/team/table/{id}', [TeamController::class, 'showteamtable']);

//Welcome 

Route::get('/',[TeamController::class, 'index']);

// Allteam

Route::get('/allteam', [TeamController::class, 'allteam'])->name('allteam');




