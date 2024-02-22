<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // ESTE HERA DE LA CLASE CONTROLADOR
    //EXTENDS EN PHP ES HERENCIA

    public function index(){
        //metodo que va a mostrar la pantalla principal
        return view('student');
    }
    //Sobreescribir metodo 
    public function store(StudentRequest $request){
        return "formulario procesado";
    }
}