@extends('layouts.bootstrap')

@section('title', 'Home')
    
@section('body')
<div class="container">
    <h1>Ini halaman home</h1>
    <h2>welcome {{Auth::user()->name}}. anda adalah {{ Auth::user()->role->name }}</h2>
    
</div>
@endsection