@extends('layouts.bootstrap')

@section('title', 'teacher-detail')
    
@section('body')
<h4 class="mt-3">Detail Teacher</h4>
<ol class="list-group list-group-numbered mt-3">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Name</div>
            {{ $teacher->name }}
        </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Class</div>
            <ul class="list-group">
                @if ($teacher->class)
                    {{ $teacher->class->name }}
                @else
                    {{$teacher->name }} is not a homeroom teacher
                @endif
            </ul>
        </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">List Students</div>
            <ul class="list-group">
                @if ($teacher->class)
                    @foreach ($teacher->class->students as $val)
                        <li>{{ $val->name }}</li>
                    @endforeach
                @else
                    {{$teacher->name }} is not a homeroom teacher(haven't students)
                @endif
            </ul>
        </div>
    </li>
</ol>
@endsection