<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $ekskul = Extracurricular::all();
        return view('extracurricular', ['ekskul' => $ekskul]);
    }

    public function show($id)
    {
        $ekskul = Extracurricular::with(['students'])->findOrFail($id);
        return view('extracurricular-detail', ['ekskul' => $ekskul]);
    }
}
