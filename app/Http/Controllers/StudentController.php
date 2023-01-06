<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['class.homeroomTeacher', 'extracurriculars'])->get(); //with dapet dari func dalam model
        return view('students', ['allStudents' => $students]);
    }
}
