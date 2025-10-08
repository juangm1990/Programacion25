<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionesEjerciciosController extends Controller
{
    // Mostrar el formulario
    public function formularioEnvio()
    {
        return view('Resourses_view.formularioEnvio');
    }

    // Procesar el resultado
    public function resultadoRespuesta(Request $request)
    {
        // Recoger el texto enviado por GET
        $texto = $request->input('texto');

        // Invertir el texto
        $invertido = strrev($texto);

        // Preparar el resultado
        $resultado = "El texto invertido de '$texto' es: $invertido";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
