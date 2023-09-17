@extends('templates.layouts.main')

@section('content')
    <h1 class="my-4">Article Categories</h1>
    <div class="row">
        @foreach ($category as $item)
            <div class="col-md-4">
                <a href="/posts?category={{ $item->slug }}" class="d-inline categories">
                    <div class="card text-bg-dark">
                        <div class="images">
                            <img src="https://source.unsplash.com/500x400?{{ $item->name }}" class="card-img"
                                alt="{{ $item->name }}">
                        </div>
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h3 class="card-title text-center flex-fill fs-2 p-4"
                                style="background-color: rgba(0, 0, 0, 0.8)">
                                {{ $item->name }}</h3>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
