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
        $numero = $request->input('numero');
        $resultado = "Tabla de multiplicar del $numero:<br>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado .= "$numero x $i = " . ($numero * $i) . "<br>";
        }

        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
