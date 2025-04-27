@extends('layouts.app')
@section('scripts')
<!-- JS et CSS  -->
@endsection

@section('content')
        <h1>Edit Post</h1>
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" required>{{ $post->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to posts List</a>
@endsection
