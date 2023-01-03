@extends('layouts.bootstrap')

@section('title', 'Home')
    
@section('body')
<div class="container">
    <h1>Ini halaman home</h1>
    <h2>welcome {{ $name; }}</h2>
    <h2>Anda {{ $role; }}</h2>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Name</th>
        </tr>
        @foreach ($mobil as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection