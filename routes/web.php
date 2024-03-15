<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsReportsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dash');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin', function(){

})->middleware('auth');

/*Route::get('/estudiantes', function () {
    return view('estudiantes');
})->name('alumnos');*/
/*
Route::get('/alumnos', [StudentController::class, 'index']);
Route::post('/alumnos', [StudentController::class, 'store']);
*/

Route::resource('estudiantes', StudentController::class);

Route::get('students', function(){
    return view('almuno');
});

Route::get('formulario', function(){
    return view('student');
});

Route::get('horario', function(){
    return view('horario');
});

Route::get('calificaciones', function(){
    return view('calificaciones');
});

Route::get('reportes/{estudiantes}', [StudentsReportsController::class,'show_cardex'])->name('reportes.imprimir');