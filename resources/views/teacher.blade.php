@extends('layouts.bootstrap')

@section('title', 'Teacher')
    
@section('body')
<div class="container">
    <h4 class="mt-3">List Teachers</h4>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allTeachers as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection