<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        // All
        // $this->middleware('auth');
        // Algunos metodos
        // $this->middleware('auth')->only(['store','update']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $student = new Student;
        // $student->name = $request->name_student;
        // $student->lastname = $request->lastname_student;
        // $student->id_student = $request->id_student;
        // $student->birthday = $request->birthday;
        // $student->comments = $request->comments;
        // $student->save();

        // return redirect()->route('students.index')->with('success', 'Datos agregados exitosamente.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->name_student = $request->name_student;
        $student->lastname_student = $request->lastname_student;
        $student->id_stident = $request->id_stident;
        $student->bithday = $request->bithday;
        $student->comments = $request->comments;
        $student->save();
    
        return redirect()->route('students.index')->with('success', 'Datos agregados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view('edit-student',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, $id): RedirectResponse
    {
        $student = Student::findOrFail($id); // Asegúrate de encontrar al estudiante o lanzar una excepción si no se encuentra
    
        $student->update($request->all()); // Actualiza el estudiante con los datos recibidos en la solicitud
    
        return redirect()->route('estudiantes.index')->with('notificacion', 'Estudiante editado correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}