@extends('plantilla')
@section('titulo')
    Lista
@endsection

@section('contenido')
<h1 class="text-center text-4xl font-bold p-5">Lista de estudiantes</h1>
<div class="py-3">
    <a href="formulario"><button class="bg-green-300 hover:bg-green-100 p-2 text-white rounded-lg mr-4">Agregar</button></a>
</div>
<table class="border shadow-xl p-2 mr-4">
    <th class="border px-2 py-2 bg-green-500">Nombre</th>
    <th class="border px-2 py-2 bg-green-500">Apellido</th>
    <th class="border px-2 py-2 bg-green-500">Matricula</th>
    <th class="border px-2 py-2 bg-green-500">Cumpleaños</th>
    <th class="border px-2 py-2 bg-green-500">Comentarios</th>
    <th class="border px-2 py-2 bg-green-500">Acciones</th>
@foreach ($students as $student)
    <tr class="border">
        <td class="border px-4 py-4">{{$student->name_student}}</td>
        <td class="border px-4 py-4">{{$student->lastname_student}}</td>
        <td class="border px-4 py-4">{{$student->id_stident}}</td>
        <td class="border px-4 py-4">{{$student->bithday}}</td>
        <td class="border px-4 py-4">{{$student->comments}}</td>
        <td class="px-4 py-4 flex"> <a class=" bg-green-300 p-2 rounded-lg text-white hover:bg-green-200" href="{{route('estudiantes.show', $student->id)}}">Detalles</a>
        <a class=" px-4 py-4"> <a class=" bg-green-800 p-2 rounded-lg text-white hover:bg-green-600" href="{{route('estudiantes.edit', $student->id)}}">Editar</a></a>

    </tr>
    @endforeach
</table>
<div class="p-2">
    {{$students->links()}}
</div>
@endsection
    
