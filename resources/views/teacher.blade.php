@extends('layouts.bootstrap')

@section('title', 'Teacher')
    
@section('body')
<div class="container">
    <h1>Ini halaman teacher</h1>
    <h4>List Teachers</h4>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allTeachers as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection