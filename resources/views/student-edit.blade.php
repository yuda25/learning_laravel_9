@extends('layouts.bootstrap')

@section('title', 'Students-edit')
    
@section('body')
<div class="mt-3 col-8 m-auto">
    <h4>Add Student Here</h4>
    <form action="/student/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" value="{{$student->name}}" required>
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-select" required>
                <option value="{{ $student->gender }}">{{ $student->gender }}</option>
                @if ($student->gender == 'L')
                    <option value="P">P</option>
                @else
                    <option value="L">L</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="nis">NIS</label>
            <input name="nis" type="text" class="form-control" id="nis" value="{{$student->nis}}" required>
        </div>

        <div class="mb-3">
            <label for="Class">Class</label>
            <select name="class_id" id="class" class="form-select" required>
                <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
                @foreach ($class as $val)
                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-success">Update</button>
        </div>
    </form>
</div>
@endsection