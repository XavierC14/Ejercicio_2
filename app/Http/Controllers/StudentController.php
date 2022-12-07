<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//Controller de la tabla estudiantes y sus campos
class StudentController extends Controller
{

    public function insert(Request $request)
    {
        if (auth()->user()->rol == 1) {
            $request->validate([
                'nombre' => 'required',
                'apellidos' => 'required',
                'dni' => 'required',
                'curso' => 'required'
            ]);

            $student = new Student();
            $student->nombre = $request->nombre;
            $student->apellidos = $request->apellidos;
            $student->dni = $request->dni;
            $student->curso = $request->curso;
            $student->save();

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
        if (auth()->user()->rol == 1 || auth()->user()->rol == 2) {
            $student = new Student();
            $student->nombre = $request->nombre;
            $student->apellidos = $request->apellidos;
            $student->dni = $request->dni;
            $student->curso = $request->curso;
            $student->update();

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
        if (auth()->user()->rol == 1) {
            $student = new Student();
            $student->nombre = $request->nombre;
            $student->apellidos = $request->apellidos;
            $student->dni = $request->dni;
            $student->curso = $request->curso;
            $student->delete();

            return response()->json([
                "status" => 1,
                "msg" => "¡Se a quitado el estudiante!",
            ]);
        } else {
            return "No tienes permisos";
        }
    }
}
