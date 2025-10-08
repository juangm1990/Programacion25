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

        // Limpiar espacios y pasar a minúsculas
        $limpio = strtolower(str_replace(' ', '', $texto));

        // Invertir el texto
        $invertido = strrev($limpio);

        // Comprobar si es igual al original
        if ($limpio == $invertido) {
            $resultado = "El texto '$texto' es un palíndromo: true";
        } else {
            $resultado = "El texto '$texto' es un palíndromo: false";
        }

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
