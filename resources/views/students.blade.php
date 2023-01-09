@extends('layouts.bootstrap')

@section('title', 'Students')
    
@section('body')
<div class="container">
    <h4 class="mt-3">List Students</h4>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">NIS</th>
            <th scope="col">Class</th>
            <th scope="col">Extracurricular</th>
            <th scope="col">Homeroom teacher</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allStudents as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
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