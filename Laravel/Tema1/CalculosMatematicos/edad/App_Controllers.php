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
        // Recoger la fecha de nacimiento enviada por GET
        $fechaNacimiento = $request->input('fecha');

        // Calcular edad
        $fechaNac = new \DateTime($fechaNacimiento);
        $hoy = new \DateTime();
        $edad = $hoy->diff($fechaNac)->y;

        // Preparar el resultado
        $resultado = "Tu edad es: $edad años.";

        // Mostrar el resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
