@extends('layouts.app')

@section('content')
<h2>Edit Course</h2>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="title" value="{{ $student->name }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection