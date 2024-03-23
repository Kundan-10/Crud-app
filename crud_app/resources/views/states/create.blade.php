@extends('layouts.app')

@section('content')
    <h1>Add State</h1>
    <form method="POST" action="{{ route('states.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">State Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

       

        <button type="submit" class="btn btn-primary">Add State</button>
@endsection