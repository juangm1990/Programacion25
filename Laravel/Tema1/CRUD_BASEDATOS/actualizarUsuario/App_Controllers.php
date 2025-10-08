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
        // Recoger los datos del formulario
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $password = $request->input('password');
        $fecha = $request->input('fecha_nacimiento');

        // Actualizar usuario en la base de datos
        $actualizado = DB::table('usuarios')
            ->where('nombre', $nombre)
            ->update([
                'email' => $email,
                'password' => $password,
                'fecha_nacimiento' => $fecha
            ]);

        // Comprobar si se actualizó
        if ($actualizado) {
            $resultado = "Datos del usuario '$nombre' actualizados correctamente.";
        } else {
            $resultado = "No se encontró ningún usuario con el nombre '$nombre'.";
        }

        // Mostrar resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
