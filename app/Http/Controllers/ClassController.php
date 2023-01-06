<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->get();
        return view('classRoom', ['allClass' => $class]);
    }
}
