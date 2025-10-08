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
        // Recoger los números separados por comas
        $entrada = $request->input('numeros');
        $numeros = explode(',', $entrada);

        $suma = 0;
        $cantidad = 0;

        for ($i = 0; $i < count($numeros); $i++) {
            $valor = trim($numeros[$i]);
            if (is_numeric($valor)) {
                $suma = $suma + $valor;
                $cantidad = $cantidad + 1;
            }
        }

        if ($cantidad > 0) {
            $media = $suma / $cantidad;
            $resultado = "La media del array es: $media";
        } else {
            $resultado = "No se introdujeron números válidos.";
        }

        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
