<?php
namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students=Student::all();
        $students=Student::paginate(10);
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = new Student;
        $student->name_student = $request->name_student;
        $student->lastname_student = $request->lastname_student;
        $student->id_stident = $request->id_stident;
        $student->bithday = $request->bithday;
        $student->comments = $request->comments;
        $student->save();
    
        return redirect()->route('estudiantes.index')->with('success', 'Datos agregados exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student=Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id):RedirectResponse
    {
        $student = Student::find($id);
        $student->update([
            'name_student' => $request->input('name_student'),
            'lastname_student' => $request->input('lastname_student'),
            'id_stident' => $request->input('id_stident'),
            'bithday' => $request->input('bithday'),
            'comments' => $request->input('comments')
        ]);
        return redirect()->route('estudiantes.index')->with('notificacion', 'Estudiante editado correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
