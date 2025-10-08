<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesEjerciciosController;

// EJERCICIO: ESFINDESEMANA
Route::get('/formularioEnvio', [FuncionesEjerciciosController::class, 'formularioEnvio']);
Route::get('/resultadoRespuesta', [FuncionesEjerciciosController::class, 'resultadoRespuesta'])->name('resultado');

http://localhost/public/formularioEnvio
