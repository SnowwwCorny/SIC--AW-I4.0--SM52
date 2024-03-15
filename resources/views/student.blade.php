@extends('plantilla')
@section('titulo')
    Estudiantes
@endsection

@section('contenido')
        <h1 class="text-3xl font-bold p-2 text-center">Agregar un nuevo estudiante</h1>
    <div class="flex items-center justify-center mr-24">

        <form class="" action="{{url('estudiantes')}}" method="POST">
        @csrf
        <p class="p-2">Nombre</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="name_student" type="text">
            @error('name_student')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
        <p class="p-2">Apellido</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="lastname_student" type="text">
            
        <p class="p-2">Matricula</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="id_stident" type="text">
            @error('id_stident')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
        <p class="p-2">Cumpleaños</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="bithday" type="date">
            @error('bithday')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
        <p class="p-2">Comentarios</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="comments" type="text"></input>
    </div>
    <div class="flex items-center justify-center mr-4">
    <button class="bg-green-300 p-2 rounded-lg hover:bg-green-100 text-white m-4">Enviar</button>
    </div>
</form>
@endsection
