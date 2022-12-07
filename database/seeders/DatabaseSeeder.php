<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use App\Models\Profesor;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // Seeders de las tablas User, estudiantes, profesores y cursos
    public function run()
    {
        User::factory(100)->create();
        Student::factory(100)->create();
        Profesor::factory(100)->create();
        Curso::factory(100)->create();
    }
}
