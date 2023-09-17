@extends('templates.layouts.dashboard')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>
@endsection
