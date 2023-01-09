@extends('layouts.bootstrap')

@section('title', 'Extracurricular')
    
@section('body')
<div class="container">
    <h4 class="mt-3">List Extracurricular</h4>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ekskul as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td><a href="/extracurricular-detail/{{$data->id}}" class="btn btn-success btn-sm">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection