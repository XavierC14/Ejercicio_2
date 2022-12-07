<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo de la tabla cursos y su campo
class Curso extends Model
{
    use HasFactory;

    protected $table = "cursos";

    protected $fillable = [
        'nombrecurso'
    ];
    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
}