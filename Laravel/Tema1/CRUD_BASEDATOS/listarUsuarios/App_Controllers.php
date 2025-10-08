<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionesEjerciciosController extends Controller
{
    public function formularioEnvio()
    {
        return view('Resourses_view.formularioEnvio');
    }

    public function resultadoRespuesta()
    {
        // Obtener todos los usuarios de la tabla
        $usuarios = DB::table('usuarios')->get();

        // Preparar texto con los datos
        $resultado = "Listado de usuarios:\n\n";

        foreach ($usuarios as $usuario) {
            $resultado .= "Nombre: $usuario->nombre | Email: $usuario->email | Fecha de nacimiento: $usuario->fecha_nacimiento\n";
        }

        // Mostrar resultado
        return view('Resourses_view.resultadoRespuesta', ['resultado' => nl2br($resultado)]);
    }
}
