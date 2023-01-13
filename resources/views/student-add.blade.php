@extends('layouts.bootstrap')

@section('title', 'student-add')
    
@section('body')
<div class="mt-3 col-8 m-auto">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h4>Add Student Here</h4>
    <form action="student" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-select">
                <option value="">Select one</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nis">NIS</label>
            <input name="nis" type="text" class="form-control" id="nis">
        </div>

        <div class="mb-3">
            <label for="Class">Class</label>
            <select name="class_id" id="class" class="form-select">
                <option value="">Select one</option>
                @foreach ($class as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="Photo" class="form-label">Profile (optional)</label>
            <div>
                <input class="form-control" type="file" id="Photo" name="photo">
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection