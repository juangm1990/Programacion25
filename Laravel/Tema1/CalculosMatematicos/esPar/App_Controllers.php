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
        // Recoger el número enviado por GET
        $numero = $request->input('numero');

        // Comprobar si el número es par o impar
        if ($numero % 2 == 0) {
            $resultado = "El número $numero es par: true";
        } else {
            $resultado = "El número $numero es par: false";
        }

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
