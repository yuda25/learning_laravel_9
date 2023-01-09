<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::all();
        return view('classRoom', ['allClass' => $class]);
    }

    public function show($id)
    {   
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->findOrFail($id);
        return view('class-detail', ['class' => $class]);
    }
}
