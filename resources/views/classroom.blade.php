@extends('layouts.bootstrap')

@section('title', 'Class')
    
@section('body')
<div class="container">
    <h1>Ini halaman class</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Students</th>
                <th>Homeroom Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allClass as $data)
                <tr>
                    <td>{{ $loop->iteration; }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $students)
                            - {{ $students['name'] }} <br>
                        @endforeach
                    </td>
                    <td>{{ $data->homeroomTeacher->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection