@extends('layouts.bootstrap')

@section('title', 'Class')
    
@section('body')
<div class="container">
    <h1>Ini halaman class</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allClass as $data)
                <tr>
                    <td>{{ $loop->iteration; }}</td>
                    <td>{{ $data->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection