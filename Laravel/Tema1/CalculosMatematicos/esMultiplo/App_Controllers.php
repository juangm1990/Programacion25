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
        // Recoger los números enviados por GET
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');

        // Comprobar si el primero es múltiplo del segundo
        if ($numero2 != 0 && $numero1 % $numero2 == 0) {
            $resultado = "El número $numero1 es múltiplo de $numero2: true";
        } else {
            $resultado = "El número $numero1 es múltiplo de $numero2: false";
        }

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
