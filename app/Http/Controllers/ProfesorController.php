<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfesorController extends Controller
{

    public function insert(Request $request) {

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

    }
}
