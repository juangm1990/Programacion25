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

        // Crear el array con los cuadrados
        $cuadrados = [];
        for ($i = 1; $i <= $numero; $i++) {
            $cuadrados[] = $i * $i;
        }

        // Convertir el array a texto
        $texto = implode(', ', $cuadrados);

        // Preparar el resultado
        $resultado = "Los cuadrados del 1 al $numero son: $texto";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
