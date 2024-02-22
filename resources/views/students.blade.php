@extends('plantilla')
@section('titulo')
    Lista
@endsection

@section('contenido')
<h1 class="text-center text-4xl font-bold p-5">Lista de estudiantes</h1>
<table class="border shadow-xl p-2">
    <th class="border px-2 py-2 bg-green-600">Nombre</th>
    <th class="border px-2 py-2 bg-green-600">Apellido</th>
    <th class="border px-2 py-2 bg-green-600">Matricula</th>
    <th class="border px-2 py-2 bg-green-600">Cumpleaños</th>
    <th class="border px-2 py-2 bg-green-600">Comentarios</th>
@foreach ($students as $student)
    <tr class="border">
        <td class="border px-4 py-4">{{$student->name_student}}</td>
        <td class="border px-4 py-4">{{$student->lastname_student}}</td>
        <td class="border px-4 py-4">{{$student->id_stident}}</td>
        <td class="border px-4 py-4">{{$student->bithday}}</td>
        <td class="border px-4 py-4">{{$student->comments}}</td>
    </tr>
    @endforeach
</table>
@endsection
    
