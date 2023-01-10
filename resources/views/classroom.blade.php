@extends('layouts.bootstrap')

@section('title', 'Class')
    
@section('body')
<div class="container">
  <div class="d-flex justify-content-between mt-3">
    <h4>List Class</h4>
    <a href="" class="btn btn-success">Add</a>
  </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allClass as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td><a href="/class-detail/{{$data->id}}" class="btn btn-success btn-sm">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection