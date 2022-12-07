<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//Controller de la tabla profesores y sus campos.
class ProfesorController extends Controller
{

    public function insert(Request $request)
    {

        if (auth()->user()->rol == 4) {
            $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
                'dni' => 'required'
            ]);

            $profesor = new Profesor();
            $profesor->nombre = $request->nombre;
            $profesor->apellido = $request->apellido;
            $profesor->dni = $request->dni;
            $profesor->save();

            return response()->json([
                "status" => 1,
                "msg" => "¡Registro de estudiante exitoso!",
            ]);
        } else {
            return "No tienes permisos";
        }
    }

    public function update(Request $request)
    {
        if (auth()->user()->rol == 4) {
            $profesor = new Profesor();
            $profesor->nombre = $request->nombre;
            $profesor->apellidos = $request->apellidos;
            $profesor->dni = $request->dni;
            $profesor->curso = $request->curso;
            $profesor->update();

            return response()->json([
                "status" => 1,
                "msg" => "¡Se a actualizado el estudiante!",
            ]);
        } else {
            return "No tienes permisos";
        }
    }

    public function destroy(Request $request)
    {
        if (auth()->user()->rol == 4) {
            $profesor = new Profesor();
            $profesor->nombre = $request->nombre;
            $profesor->apellidos = $request->apellidos;
            $profesor->dni = $request->dni;
            $profesor->curso = $request->curso;
            $profesor->delete();

            return response()->json([
                "status" => 1,
                "msg" => "¡Se a quitado el estudiante!",
            ]);
        } else {
            return "No tienes permisos";
        }
    }
}
