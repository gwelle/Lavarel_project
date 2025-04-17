@extends('layouts.app')
@section('scripts')
<!-- JS et CSS  -->
@endsection

@section('content')
        <h1>Create User</h1>
        <x-alert />
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" required>
            </div>

            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to Users List</a>