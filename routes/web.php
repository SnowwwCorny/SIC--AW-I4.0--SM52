<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\StudentController;

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

/*Route::get('/docentes/{codigo}', function ($codigo) {
    return view('docentes')->with('clave', $codigo);
});*/

/*Route::get('/estudiantes', function () {
    return view('estudiantes');
})->name('alumnos');*/
/*
Route::get('/alumnos', [StudentController::class, 'index']);
Route::post('/alumnos', [StudentController::class, 'store']);
*/

Route::resource('estudiantes', StudentController::class);