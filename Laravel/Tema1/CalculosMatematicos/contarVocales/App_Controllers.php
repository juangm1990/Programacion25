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

        // Pasar todo a minúsculas para contar bien
        $texto = strtolower($texto);

        // Contar vocales
        $vocales = 0;
        $letras = str_split($texto);

        for ($i = 0; $i < count($letras); $i++) {
            if ($letras[$i] == 'a' || $letras[$i] == 'e' || $letras[$i] == 'i' || $letras[$i] == 'o' || $letras[$i] == 'u') {
                $vocales = $vocales + 1;
            }
        }

        // Preparar el resultado
        $resultado = "El texto '$texto' tiene $vocales vocales.";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
