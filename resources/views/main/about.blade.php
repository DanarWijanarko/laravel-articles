@extends('templates.layouts.main')

@section('content')
    <h1 class="text-center">Halaman About</h1>
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="400">
@endsection
