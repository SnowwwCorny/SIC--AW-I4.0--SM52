@extends('plantilla')
@section('titulo')
    Welcome
@endsection
@section('contenido')
<h1 class="text-4xl p-5 font-bold">Bienvenido de nuevo Docente</h1>
<div class="flex items-center justify-center p-3">
    <div class="bg-gray-100 shadow-lg rounded-lg p-5 mr-5">
        <div class="text-center ">
            <h1 class="font-bold">Calificaciones</h1>
            <p>Mira las calificaciones de tus alumnos</p>
        </div>
    </div>

    <div class="bg-gray-100 shadow-lg rounded-lg p-5 mr-5">
        <div class="text-center ">
            <h1 class="font-bold">Horario</h1>
            <p>Ve tus horarios de clase</p>
        </div>
    </div>

    <div class="bg-gray-100 shadow-lg rounded-lg p-5 mr-5">
        <div class="text-center ">
            <h1 class="font-bold">Resultado evaluacion docente</h1>
            <p>El resultado de tu evaluacion como docente</p>
        </div>
    </div>

    <div class="bg-gray-100 shadow-lg rounded-lg p-5 mr-5">
        <div class="text-center ">
            <h1 class="font-bold">SIU</h1>
            <p>Carga las califiaciones al sistema de la escuela</p>
        </div>
    </div>
</div>

@endsection