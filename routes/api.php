<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Routes necesarios para que funcionen los inserts desde postman
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(['middleware' => ["auth:sanctum"]], function () {
    //rutas
    // Rutas para el insert, update y delete de la tabla estudiantes
    Route::post('insert-student', [StudentController::class, 'insert']);
    Route::post('update-student', [StudentController::class, 'update']);
    Route::post('delete-student', [StudentController::class, 'destroy']);
    //Rutas para el insert, update y delete de la tabla profesores
    Route::post('insert-profesor', [ProfesorController::class, 'insert']);
    Route::post('update-profesor', [ProfesorController::class, 'update']);
    Route::post('delete-profesor', [ProfesorController::class, 'destroy']);
    // Rutas para el insert, update y delete de la tabla cursos
    Route::post('insert-curso', [CursoController::class, 'insert']);
    Route::post('update-curso', [CursotController::class, 'update']);
    Route::post('delete-curso', [CursotController::class, 'destroy']);
    Route::get('user-profile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});
