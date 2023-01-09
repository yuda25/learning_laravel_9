@extends('layouts.bootstrap')

@section('title', 'Class')
    
@section('body')
<div class="container">
    <h4 class="mt-3">List Class</h4>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Students</th>
            <th scope="col">Homeroom Teacher</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allClass as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
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