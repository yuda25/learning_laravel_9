@extends('layouts.bootstrap')

@section('title', 'Students')
    
@section('body')
<div class="container">
  @if (Session::has('status'))
    <div class="alert alert-success mt-3" role="alert">
      {{ Session::get('message') }}
    </div>
  @endif
  <div class="d-flex justify-content-between mt-3">
    <h4>List Students</h4>
    <form action="" method="GET">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Search Here">
          <button class="input-group-text btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </form>
    <div>
      <a href="/student-add" class="btn btn-success">Add</a>
      <a href="/students-deleted" class="btn btn-info">Trash</a>

    </div>
  </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">NIS</th>
            <th scope="col">Class</th>
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
                    <td>{{ $data->class->name }}</td>
                    <td>
                      <a href="/student/{{$data->id}}" class="btn btn-success btn-sm">Detail</a>
                      <a href="/student-edit/{{$data->id}}" class="btn btn-info btn-sm">Edit</a>
                      <a href="student-delete/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin di hapus?')">Delete</a>
            @endforeach
        </tbody>
      </table>
      <div>
        {{$allStudents->withQueryString()->links()}}
      </div>
    </div>
@endsection