<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesEjerciciosController;

// EJERCICIO: LISTARUSUARIOS
Route::get('/formularioEnvio', [FuncionesEjerciciosController::class, 'formularioEnvio']);
Route::post('/resultadoRespuesta', [FuncionesEjerciciosController::class, 'resultadoRespuesta'])->name('resultado');

http://localhost/public/formularioEnvio
