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
        // Recoger el nombre del usuario a borrar
        $nombre = $request->input('nombre');

        // Eliminar usuario de la tabla 'usuarios'
        $borrado = DB::table('usuarios')->where('nombre', $nombre)->delete();

        // Comprobar si se borró
        if ($borrado) {
            $resultado = "Usuario '$nombre' eliminado correctamente.";
        } else {
            $resultado = "No se encontró ningún usuario con el nombre '$nombre'.";
        }

        // Mostrar el resultado
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
