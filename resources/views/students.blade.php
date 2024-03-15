@extends('plantilla')
@section('titulo')
    Lista
@endsection

@section('contenido')
<h1 class="text-center text-4xl font-bold p-5">Lista de estudiantes</h1>
<a href="formulario"><button class="bg-blue-500 p-3 text-white hover:bg-blue-300 rounded-lg">Agregar</button></a>
<table class="border shadow-xl p-2">
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
<div>
    {{$students->links()}}
</div>
@endsection
    
