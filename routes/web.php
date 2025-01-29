<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('/welcome');
});


Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::post('/teams/store', [TeamController::class, 'store'])->name('teams.store');
Route::post('/teams/update/{id}', [TeamController::class, 'update'])->name('teams.update');
 
Route::post('/teams/update-all', [TeamController::class, 'updateAll'])->name('teams.updateAll');
