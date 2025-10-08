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

        // Insertar usuario en la base de datos
        DB::table('usuarios')->insert([
            'nombre' => $nombre,
            'email' => $email,
            'password' => $password,
            'fecha_nacimiento' => $fecha
        ]);

        // Preparar mensaje
        $resultado = "Usuario '$nombre' insertado correctamente.";

        // Mostrar resultado en la vista
        return view('Resourses_view.resultadoRespuesta', ['resultado' => $resultado]);
    }
}
