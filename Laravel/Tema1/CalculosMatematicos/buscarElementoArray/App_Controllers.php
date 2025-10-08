<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionesEjerciciosController extends Controller
{
    public function formularioEnvio()
    {
        return view('Resourses_view.formularioEnvio');
    }

    public function resultadoRespuesta(Request $request)
    {
        // Recoger los números separados por comas y el valor a buscar
        $entrada = $request->input('numeros');
        $buscar = $request->input('buscar');

        // Convertir el texto en array
        $numeros = explode(',', $entrada);

        $encontrado = false;

        for ($i = 0; $i < count($numeros); $i++) {
            $valor = trim($numeros[$i]);
            if ($valor == $buscar) {
                $encontrado = true;
                break;
            }
        }

        if ($encontrado) {
            $resultado = "El valor $buscar está dentro del array: true";
        } else {
            $resultado = "El valor $buscar está dentro del array: false";
        }

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
