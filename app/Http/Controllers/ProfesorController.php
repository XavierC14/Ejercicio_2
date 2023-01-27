<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use App\Models\Verification;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    //Controller para hacer el insert
    public function insert(Request $request)
    {
        DB::beginTransaction();
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
            // $profesor->save();
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
        if (auth()->user()->rol == 4) {
            $profesor = new Profesor();
            $profesor->nombre = $request->nombre;
            $profesor->apellidos = $request->apellidos;
            $profesor->dni = $request->dni;
            $profesor->curso = $request->curso;
            $profesor->update();
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
        if (auth()->user()->rol == 4) {
            $profesor = new Profesor();
            $profesor->nombre = $request->nombre;
            $profesor->apellidos = $request->apellidos;
            $profesor->dni = $request->dni;
            $profesor->curso = $request->curso;
            $profesor->delete();
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
