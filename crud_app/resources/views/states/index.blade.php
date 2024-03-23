@extends('layouts.app')

@section('content')
    <h1>States</h1>
    <a href="{{ route('states.create') }}" class="btn btn-primary">Add State</a>

    <ul>
        @foreach ($states as $state)
            <li>{{ $state->name }} - City Count: {{ $state->cities->count() }}</li>
        @endforeach
    </ul>
@endsection