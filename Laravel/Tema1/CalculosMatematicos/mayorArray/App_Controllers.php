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
        $entrada = $request->input('numeros');
        $numeros = explode(',', $entrada);

        $mayor = null;

        for ($i = 0; $i < count($numeros); $i++) {
            $valor = trim($numeros[$i]);
            if (is_numeric($valor)) {
                if ($mayor === null || $valor > $mayor) {
                    $mayor = $valor;
                }
            }
        }

        if ($mayor !== null) {
            $resultado = "El número mayor del array es: $mayor";
        } else {
            $resultado = "No se introdujeron números válidos.";
        }

        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
