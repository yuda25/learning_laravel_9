@extends('layouts.bootstrap')

@section('title', 'Students-deleted')
    
@section('body')
<div class="container">
  @if (Session::has('status'))
    <div class="alert alert-success mt-3" role="alert">
      {{ Session::get('message') }}
    </div>
  @endif
  <div class="d-flex justify-content-between mt-3">
    <h4>List Students Deleted</h4>
    <div>
    </div>
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
            @foreach ($students as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>
                      @if (Auth::user()->role->name == 'Admin')
                      <a href="/students/{{$data->id}}/restore" class="btn btn-success btn-sm" onclick="return confirm('yakin data dengan nama {{ $data->name }} ingin di restore?')">Restore</a>
                      <a href="/students-hard-delete/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin di hapus?')">Hard Delete</a>
                      @endif
            @endforeach
        </tbody>
      </table>
</div>
@endsection