@extends('layouts.app')
@section('scripts')
<!-- JS et CSS  -->
@endsection

@section('content')
 
<div>
    
        @foreach ($posts as $post)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            </tbody>
           <button> <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a></button>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
        </table>
        @endforeach
</div>

@endsection
