@extends('layouts.app')

@section('content')
<h2>View Post</h2>

    @csrf @method('PUT')
    <div class="mb-3">
        <label>Title: {{ $post->title }}</label>
        
    </div>
    <div class="mb-3">
        <label>Content: {{ $post->content }}</label>
        
    </div>
    <a href="{{url()->previous()}}" class="btn btn-primary">Return</a>

@endsection