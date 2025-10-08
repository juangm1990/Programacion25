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

    public function resultadoRespuesta(Request $request)
    {
        // Recoger el nombre del usuario a buscar
        $nombre = $request->input('nombre');

        // Buscar usuario en la base de datos
        $usuario = DB::table('usuarios')->where('nombre', $nombre)->first();

        // Comprobar si existe
        if ($usuario) {
            $resultado = "Usuario encontrado: $usuario->nombre | Email: $usuario->email | Fecha de nacimiento: $usuario->fecha_nacimiento";
        } else {
            $resultado = "No se encontró ningún usuario con el nombre '$nombre'.";
        }

        // Mostrar el resultado
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
