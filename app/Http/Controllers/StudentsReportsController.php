<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\App;

class StudentsReportsController extends Controller
{
    public function show_cardex($id){
        //3. obtener los datos del modelo
        $student= Student::find($id);
        $data=[
            'title' => 'Reporte de estudiante',
            'details' => $student
        ];
        //dd($student);
        $pdf = App::make('dompdf.wrapper');
        $pdf ->loadView('reports.cardex', $data);
        return $pdf->stream();
    }
}
