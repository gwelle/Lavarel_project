@extends('layouts.app')
@section('content')
        <h1>Post avec le titre {{ $post->title }}</h1>
        <p>Contenu : {{ $post->content }}</p>
        <p>Créé le : {{ $post->created_at }}</p>
        
        <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to posts List</a>
@endsection
