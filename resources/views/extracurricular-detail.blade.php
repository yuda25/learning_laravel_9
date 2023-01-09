@extends('layouts.bootstrap')

@section('title', 'extracurricular-detail')
    
@section('body')
<h4 class="mt-3">Detail {{ $ekskul->name }} Extracurricular</h4>
<div class="list-group mt-3">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">List Members</div>
            <ul>
                @foreach ($ekskul->students as $val)
                    <li>{{ $val->name }}</li>
                @endforeach
            </ul>
        </div>
    </li>
</div>
@endsection