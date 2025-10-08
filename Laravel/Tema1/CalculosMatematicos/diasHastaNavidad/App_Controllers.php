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
        // Recoger la fecha actual
        $hoy = date('Y-m-d');
        $navidad = date('Y') . '-12-25';

        // Convertir a formato de tiempo
        $hoyTiempo = strtotime($hoy);
        $navidadTiempo = strtotime($navidad);

        // Calcular diferencia en días
        $diferencia = ($navidadTiempo - $hoyTiempo) / (60 * 60 * 24);

        // Si ya pasó Navidad este año, calcular para el siguiente
        if ($diferencia < 0) {
            $navidadTiempo = strtotime((date('Y') + 1) . '-12-25');
            $diferencia = ($navidadTiempo - $hoyTiempo) / (60 * 60 * 24);
        }

        // Preparar el resultado
        $resultado = "Faltan " . round($diferencia) . " días para Navidad.";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
