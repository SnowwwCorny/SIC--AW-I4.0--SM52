@extends('plantilla')
@section('titulo')
    Estudiantes
@endsection

@section('contenido')
        <h1 class="text-3xl font-bold p-4 text-center">Formulario de alumno</h1>
    <div class="flex items-center justify-center mr-24">

        <form class="" action="{{url('alumnos')}}" method="POST">
        @csrf
        <p class="p-2">Nombre</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="name_student" type="text">
            @error('name_student')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
        <p class="p-2">Matricula</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="id_student" type="text">
            
        <p class="p-2">Correo</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="email_student" type="email">
            @error('email_student')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
        <p class="p-2">Contraseña</p>
            <input class="border p-2 rounded-lg" style="width: 150%" name="password_student" type="password">
            @error('password_student')
                <div class="text-center" style="color: red">{{$message}}</div>
            @enderror
    
    </div>
    <div class="flex items-center justify-center mr-4">
    <button class="bg-indigo-500 p-2 rounded-lg hover:bg-indigo-400 text-white m-4">Enviar</button>
    </div>
</form>
@endsection
