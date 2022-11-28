<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function insert(Request $request) {

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

    }

    public function update(Request $request) {
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

    }

    public function destroy(Request $request) {
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

    }
}