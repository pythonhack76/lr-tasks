@extends('layouts.app')

@section('title', 'Lista Tasks')

@section('content')
    <h1>Lista Tasks</h1>
    @foreach ($tasks as $task)
        <!-- Visualizza informazioni del task -->
    @endforeach
    <!-- Altri contenuti specifici della lista tasks -->
@endsection
