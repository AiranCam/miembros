<?php

use App\Http\Controllers\miembrosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MiembrosController::class,'index'])->name('miembros.index');
Route::get('/create',[MiembrosController::class,'create'])->name('miembros.create');
Route::get('/edit',[MiembrosController::class,'edit'])->name('miembros.edit');
Route::get('/show',[MiembrosController::class,'show'])->name('miembros.show');
Route::get('/destroy',[MiembrosController::class,'destroy'])->name('miembros.destroy');
