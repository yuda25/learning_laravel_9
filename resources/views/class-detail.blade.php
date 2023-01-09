@extends('layouts.bootstrap')

@section('title', 'class-detail')
    
@section('body')
<h4 class="mt-3">Detail Class {{ $class->name }}</h4>
<ol class="list-group list-group-numbered mt-3">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Homeroom Teacher</div>
            {{ $class->homeroomTeacher->name }}
        </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">List Students</div>
            <ul>
                @foreach ($class->students as $val)
                    <li>{{ $val->name }}</li>
                @endforeach
            </ul>
        </div>
    </li>
</ol>
@endsection