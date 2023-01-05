@extends('layouts.bootstrap')

@section('title', 'Students')
    
@section('body')
<div class="container">
    <h1>Ini halaman Students</h1>
    {{-- <p>hallo {{ $allStudents }}</p> --}}
    <h4>List Students</h4>
    <ul>
        @foreach ($allStudents as $data)
            <li>{{ $data->name; }} || {{ $data->gender; }} || {{ $data->nis; }}</li>
        @endforeach
    </ul>
</div>
@endsection