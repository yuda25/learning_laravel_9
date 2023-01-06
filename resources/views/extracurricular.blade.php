@extends('layouts.bootstrap')

@section('title', 'Extracurricular')
    
@section('body')
<div class="container">
    <h1>Ini halaman Extracurricular</h1>
    <h4>List Extracurricular</h4>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Anggota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskul as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $val)
                            - {{ $val->name }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection