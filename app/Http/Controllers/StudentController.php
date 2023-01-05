<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        // return view('students', ['allStudents' => $students]);

        // ----------------query builder----------------
        // getAll
        // $val = DB::table('students')->get();
        // dd($val);

        // insert
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '1234567',
        //     'class_id' => 1
        // ]);

        // update
        // DB::table('students')
        //       ->where('id', 30)
        //       ->update([
        //         'name' => 'query builder 2',
        //         'class_id' => 2,
        //     ]);

        // delete
        // DB::table('students')->where('id', 29)->delete();

        // ----------------eloquent(EORM)----------------
        // getAll
        // $val = Student::all();
        // dd($val);

        // insert
        // Student::insert([
        //     'name' => 'EORM',
        //     'gender' => 'L',
        //     'nis' => '1234567',
        //     'class_id' => 1
        // ]);

        // update
        // Student::find(31)->update([
        //     'name' => 'EORM 2',
        //     'class_id' => 2,
        // ]);

        // delete
        // Student::find(28)->delete();
    }
}
