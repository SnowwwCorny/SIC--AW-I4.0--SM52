@extends('plantilla')
@section('titulo')
    Estudiantes detalles
@endsection

@section('contenido')
    <h1 class="text-center text-4xl font-bold p-4">Detalles del estudiante</h1>
    <div class="flex items-center justify-center p-5">
        <div class="bg-gray-200 shadow-lg rounded-md p-2">
            <p class="text-2xl p-2 ">Nombre del estudiante: {{$student->name_student}}</p>
            <p class="text-2xl p-2 ">Apellido: {{$student->lastname_student}}</p>
            <p class="text-2xl p-2 ">Matricula: {{$student->id_stident}} </p>
            <p class="text-2xl p-2 ">Cumpleaños: {{$student->bithday}} </p>
            <p class="text-2xl p-2">Comentarios: <span>{{$student->comments}}</span></p>
            
        </div>
    </div>
    
@endsection
