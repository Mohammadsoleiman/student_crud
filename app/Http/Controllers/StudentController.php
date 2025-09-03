<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\University;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students = Student::with('university')->latest()->paginate(10);
return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $universities = University::all();
return view('students.create', compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email|unique:students,email',
'phone' => 'required|string|max:20',
'address' => 'required|string|max:512',
'university_id' => 'nullable|exists:univeities,id',
]);

Student::create($request->all());
return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
  public function show(Student $student)
{
return view('students.show', compact('student'));
}

    /**
     * Show the form for editing the specified resource.
     */
 public function edit(Student $student)
{
$universities = University::all();
return view('students.edit', compact('student','universities'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Student $student)

{
$request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email|unique:students,email,' . $student->id,
'phone' => 'required|string|max:20',
'address' => 'required|string|max:512',
'university_id' => 'nullable|exists:univeities,id',
]);

$student->update($request->all());
return redirect()->route('students.index')->with('success', 'Student updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
  public function destroy(Student $student)
{
$student->delete();
return redirect()->route('students.index')->with('success', 'Student
deleted successfully.');
}
}
