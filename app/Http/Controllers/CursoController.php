<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// Controller para hacer el insert
class GradeController extends Controller
{

    public function insert(Request $request)
    {
        if (auth()->user()->rol == 4) {
            $request->validate([
                'nombrecurso' => 'required',
                'profesor' => 'required'
            ]);
            $curso = new Curso();
            $curso->nombrecurso = $request->nombrecurso;
            $curso->profesor = $request->profesor;
            $curso->save();

            return response()->json([
                "status" => 1,
                "msg" => "¡Registro de estudiante exitoso!",
            ]);
        } else {
            return "No tienes permisos";
        }
    }
    // Controller para hacer el update
    public function update(Request $request)
    {
        if (auth()->user()->rol == 4) {
            $curso = new Curso();
            $curso->nombre = $request->nombre;
            $curso->apellidos = $request->apellidos;
            $curso->dni = $request->dni;
            $curso->curso = $request->curso;
            $curso->update();

            return response()->json([
                "status" => 1,
                "msg" => "¡Se a actualizado el estudiante!",
            ]);
        } else {
            return "No tienes permisos";
        }
    }
    //Controller para hacer el delete
    public function destroy(Request $request)
    {
        if (auth()->user()->rol == 4) {
            $curso = new Curso();
            $curso->nombre = $request->nombre;
            $curso->apellidos = $request->apellidos;
            $curso->dni = $request->dni;
            $curso->curso = $request->curso;
            $curso->delete();

            return response()->json([
                "status" => 1,
                "msg" => "¡Se a quitado el estudiante!",
            ]);
        } else {
            return "No tienes permisos";
        }
    }
}
