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