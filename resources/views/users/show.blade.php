@extends('layouts.app')

@section('scripts')
<!-- JS et CSS  -->
@endsection

@section('content')
        <h1>User Details</h1>
        <x-alert />
        <h2>{{ $user->email }}</h2>

<a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back to Users List</a>
