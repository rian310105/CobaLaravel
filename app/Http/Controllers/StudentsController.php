<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$student = new Student;
        //$student->nama = $request->nama;
        //$student->email = $request->email;
        //$student->keahlian = $request->keahlian;

        //$student->save();

        //student::create([
        //    'nama' => $request->nama,
        //    'email' => $request->email,
        //    'keahlian' => $request->keahlian,
        //]);

        $request->validate([
            'nama' => 'required',
            'email' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Karyawan Berhasil Ditambahakan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('Students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)  
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required'
        ]);

        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'keahlian' => $request->keahlian,
                ]);
        return redirect('/students')->with('status', 'Data Karyawan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Karyawan Berhasil Dihapus!');
    }
}
