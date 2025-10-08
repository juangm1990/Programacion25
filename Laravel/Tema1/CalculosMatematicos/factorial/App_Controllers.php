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

        // Calcular el factorial del número
        $factorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $factorial = $factorial * $i;
        }

        // Preparar el resultado
        $resultado = "El factorial de $numero es: $factorial";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
