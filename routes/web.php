<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('empleados/', [EmpleadoController::class, 'index']);
Route::post('empleados/', [EmpleadoController::class, 'store']);
Route::get('empleados/create', [EmpleadoController::class, 'create']);

Route::delete('empleados/{id}', [EmpleadoController::class, 'destroy']);
Route::get('empleados/{id}/edit', [EmpleadoController::class, 'edit']);
Route::put('empleados/{id}/', [EmpleadoController::class, 'update']);
