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
        // Recoger las fechas enviadas por GET
        $fecha1 = $request->input('fecha1');
        $fecha2 = $request->input('fecha2');

        // Convertir a objetos DateTime
        $f1 = new \DateTime($fecha1);
        $f2 = new \DateTime($fecha2);

        // Calcular la diferencia
        $diferencia = $f1->diff($f2)->days;

        // Preparar el resultado
        $resultado = "La diferencia entre $fecha1 y $fecha2 es de $diferencia días.";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
