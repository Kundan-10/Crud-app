@extends('layouts.app')

@section('content')
    <h1>Edit State</h1>
    <form method="POST" action="{{ route('states.update', $state->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">State Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $state->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update State</button>
@endsection