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
        // Recoger la fecha enviada por GET
        $fecha = $request->input('fecha');

        // Obtener el día de la semana (0 = domingo, 6 = sábado)
        $diaSemana = date('w', strtotime($fecha));

        // Comprobar si es fin de semana
        if ($diaSemana == 0 || $diaSemana == 6) {
            $resultado = "La fecha $fecha es fin de semana: true";
        } else {
            $resultado = "La fecha $fecha es fin de semana: false";
        }

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
