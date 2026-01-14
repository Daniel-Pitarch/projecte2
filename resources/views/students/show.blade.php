@extends('layouts.app')

@section('content')
<h2>View Course</h2>

    @csrf @method('PUT')
    <div class="mb-3">
        <label>Title: {{ $student->name }}</label>
        
    </div>

    <a href="{{url()->previous()}}" class="btn btn-primary">Return</a>

@endsection