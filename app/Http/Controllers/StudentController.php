<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $students = Student::with('class')
        ->where('name', 'LIKE', '%'.$keyword.'%')
        ->orWhere('gender', $keyword)
        ->orWhere('nis', 'LIKE', '%'.$keyword.'%')
        ->orWhereHas('class', function($query) use($keyword)
        {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->Paginate(15);
        return view('students', ['allStudents' => $students]);
    }

    public function show($id)
    {
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create()
    {   
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    public function store(StudentCreateRequest $request)
    {
        // cara biasa
        // $student = new Student;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        // cara mas assignment {name pada form harus sama dengan column dan di modal nya di beri fillable}

        $student = Student::create($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student successfully');
        }

        return redirect('/students');
    }

    public function edit(Request $request, $id)
    {
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class->id)->get(['id', 'name']);
        return view('student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        // cara mas assignment
        $student->update($request->all());
        return redirect('/students');
    }

    public function delete($id)
    {
        // pake qb
        // $del = DB::table('students')->where('id', $id)->delete();

        // pake eorm
        $student = Student::findOrFail($id);
        $student->delete();

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'data deleted successfully');
        }
        return redirect('/students');
    }

    public function softDelete()
    {
        $student = Student::onlyTrashed()->get();
        return view('students-deleted', ['students' => $student]);
    }

    public function restore($id)
    {
        $restore = Student::withTrashed()->where('id', $id)->restore();

        if ($restore) {
            Session::flash('status', 'success');
            Session::flash('message', 'data restored successfully');
        }

        return redirect('/students-deleted');
    }

    public function hardDelete($id)
    {
        $delete = Student::withTrashed()->where('id', $id)->forceDelete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('message', 'data Permanent deleted successfully');
        }

        return redirect('/students-deleted');
    }
}
