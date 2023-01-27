<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    //Controller para hacer el insert
    public function insert(Request $request)
    {
        DB::beginTransaction();
        if (auth()->user()->rol == 1) {
            $request->validate([
                'nombre' => 'required',
                'apellidos' => 'required',
                'dni' => 'required'
            ]);

            $student = new Student();
            $student->nombre = $request->nombre;
            $student->apellidos = $request->apellidos;
            $student->dni = $request->dni;
            $student->curso = $request->curso;
            // $student->save();
            DB::commit();

            return response()->json([
                "status" => 1,
                "msg" => "¡Registro de estudiante exitoso!",
            ]);
        } else {
            DB::rollBack();
            return "No tienes permisos";
        }
    }
    //Controller para hacer el update
    public function update(Request $request)
    {
        DB::beginTransaction();
        if (auth()->user()->rol == 1 || auth()->user()->rol == 2) {
            $student = new Student();
            $student->nombre = $request->nombre;
            $student->apellidos = $request->apellidos;
            $student->dni = $request->dni;
            $student->curso = $request->curso;
            $student->update();
            DB::commit();

            return response()->json([
                "status" => 1,
                "msg" => "¡Se a actualizado el estudiante!",
            ]);
        } else {
            DB::rollBack();
            return "No tienes permisos";
        }
    }
    //Controller para hacer el delete
    public function destroy(Request $request)
    {
        DB::beginTransaction();
        if (auth()->user()->rol == 1) {
            $student = new Student();
            $student->nombre = $request->nombre;
            $student->apellidos = $request->apellidos;
            $student->dni = $request->dni;
            $student->curso = $request->curso;
            $student->delete();
            DB::commit();

            return response()->json([
                "status" => 1,
                "msg" => "¡Se a quitado el estudiante!",
            ]);
        } else {
            DB::rollBack();
            return "No tienes permisos";
        }
    }
}
