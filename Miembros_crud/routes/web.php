<?php

use App\Http\Controllers\miembrosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MiembrosController::class,'index'])->name('miembros.index');
Route::get('/create',[MiembrosController::class,'create'])->name('miembros.create');
Route::get('/edit/{id_miembros}',[MiembrosController::class,'edit'])->name('miembros.edit');
Route::get('/show/{id_miembros}',[MiembrosController::class,'show'])->name('miembros.show');
Route::post('/store',[MiembrosController::class,'store'])->name('miembros.store');
Route::put('/update/{id_miembros}',[MiembrosController::class,'update'])->name('miembros.update');
Route::delete('/destroy/{id_miembros}',[MiembrosController::class,'destroy'])->name('miembros.destroy');
