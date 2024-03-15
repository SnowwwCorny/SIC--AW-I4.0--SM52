
@extends('plantilla')
@section('titulo')
    Actualizar
@endsection

@section('contenido')
    <h1 class="text-center text-3xl font-bold">Actualizar Estudiante</h1>

    <div class="flex items-center justify-center mr-24">

        <form class="" action="{{ route('estudiantes.update', $student->id) }}" method="POST">
            @csrf
            @method("put")
        <p class="p-2">Nombre</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="name_student" value="{{ $student->name_student }}">
            @error('name_student')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
        <p class="p-2">Apellido</p>
            <input class="border p-2 rounded-lg" style="width: 150%" type="text" name="lastname_student" value="{{ $student->lastname_student }}">
            @error('lastname_student')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
    
    </div>
    <div class="flex items-center justify-center mr-4">
    <button class="bg-indigo-500 p-2 rounded-lg hover:bg-indigo-400 text-white m-4">Editar</button>
    </div>
</form>
@endsection