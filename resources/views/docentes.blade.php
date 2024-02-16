@extends('plantilla')
@section('titulo')
    docentes
@endsection

@section('contenido')
    <h1 class="text-center text-2xl">Bienvenidos</h1>
    <h1 class="text-center">{{$clave}}</h1>
    <a href="{{route('alumnos')}}" class="flex items-cemter justify-center text-2xl">alumnos</a>
@endsection