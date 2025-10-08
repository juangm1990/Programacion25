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

        // Calcular la suma de los dígitos
        $suma = 0;
        $digitos = str_split($numero);

        for ($i = 0; $i < count($digitos); $i++) {
            $suma = $suma + $digitos[$i];
        }

        // Preparar el resultado
        $resultado = "La suma de los dígitos de $numero es: $suma";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
