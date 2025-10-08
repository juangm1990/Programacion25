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

        $menor = null;

        for ($i = 0; $i < count($numeros); $i++) {
            $valor = trim($numeros[$i]);
            if (is_numeric($valor)) {
                if ($menor === null || $valor < $menor) {
                    $menor = $valor;
                }
            }
        }

        if ($menor !== null) {
            $resultado = "El número menor del array es: $menor";
        } else {
            $resultado = "No se introdujeron números válidos.";
        }

        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
