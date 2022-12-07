<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Model de la tabla estudiantes y sus campos.
class Student extends Model
{
    use HasFactory;

    protected $table = "estudiantes";

    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'curso'
    ];
}
