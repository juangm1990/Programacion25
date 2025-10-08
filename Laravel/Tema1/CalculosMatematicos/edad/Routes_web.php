<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesEjerciciosController;

// EJERCICIO: EDAD
Route::get('/formularioEnvio', [FuncionesEjerciciosController::class, 'formularioEnvio']);
Route::get('/resultadoRespuesta', [FuncionesEjerciciosController::class, 'resultadoRespuesta'])->name('resultado');

http://localhost/public/formularioEnvio
