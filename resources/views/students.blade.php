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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allStudents as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td><a href="/student/{{$data->id}}" class="btn btn-success btn-sm">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection