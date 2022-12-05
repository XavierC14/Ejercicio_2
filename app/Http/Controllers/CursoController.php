<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class GradeController extends Controller
{

    public function insert(Request $request) {

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

    }
}
