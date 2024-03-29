@extends('layouts.bootstrap')

@section('title', 'student-detail')
    
@section('body')
<h4 class="mt-3">Detail Student</h4>
<div class="my-3 d-flex justify-content-center">
  @if ($student->image != '')
    <img src="{{ asset('storage/profile/'.$student->image) }}" alt="{{$student->image}}" width="200px" height="200px">
  @else
  <img src="{{ asset('/defaultProfile/default.png') }}" alt="default.png" width="200px" height="200px">
  @endif
</div>
<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">NIS</th>
        <th scope="col">Gender</th>
        <th scope="col">Class</th>
        <th scope="col">Homeroom Teacher</th>
        <th scope="col">Extracurriculars</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->nis }}</td>
        <td>
            @if ($student->gender == 'P')
                Perempuan
            @else 
                Laki-laki
            @endif
        </td>
        <td>{{ $student->class->name }}</td>
        <td>{{ $student->class->homeroomTeacher->name }}</td>
        <td>
            @foreach ($student->extracurriculars as $val)
                - {{ $val->name }} <br>
            @endforeach
        </td>
      </tr>
    </tbody>
  </table>

  <style>
    th {
        width: auto;
    }
  </style>
@endsection