@extends('layouts.bootstrap')

@section('title', 'Students')
    
@section('body')
<div class="container">
    <h1>Ini halaman Students</h1>
    {{-- <p>hallo {{ $allStudents }}</p> --}}
    <h4>List Students</h4>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class</th>
                <th>Extracurricular</th>
                <th>Homeroom teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allStudents as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->class['name'] }}</td>
                    <td>
                        @foreach ($data->extracurriculars as $val)
                            - {{ $val->name }} <br>
                        @endforeach
                    </td>
                    <td>{{ $data->class->homeroomTeacher->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection