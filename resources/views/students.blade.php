@extends('layouts.bootstrap')

@section('title', 'Students')
    
@section('body')
<div class="container">
  <div class="d-flex justify-content-between mt-3">
    <h4>List Students</h4>
    <a href="/student-add" class="btn btn-success">Add</a>
  </div>
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
                    <td>
                      <a href="/student/{{$data->id}}" class="btn btn-success btn-sm">Detail</a>
                      <a href="/student-edit/{{$data->id}}" class="btn btn-info btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection