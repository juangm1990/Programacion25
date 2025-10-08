<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesEjerciciosController;

// EJERCICIO: BORRARUSUARIO
Route::get('/formularioBorrar', [FuncionesEjerciciosController::class, 'formularioBorrar']);
Route::post('/resultadoBorrar', [FuncionesEjerciciosController::class, 'resultadoBorrar'])->name('borrar');

http://localhost/public/formularioBorrar
