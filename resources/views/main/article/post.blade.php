@extends('templates.layouts.main')

@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4">{{ $post->title }}</h1>
                <div class="row">
                    <div class="col-md-6">
                        <h5>By. <a href="/author/{{ $post->author->username }}"
                                class="nav nav-link p-0 d-inline">{{ $post->author->name }}</a>, in
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="nav nav-link p-0 d-inline">{{ $post->category->name }}</a>
                        </h5>
                    </div>
                    <div class="col-md-6 ">
                        <small class="float-end text-body-secondary">Last updated
                            {{ $post->created_at->diffForHumans() }}</small>
                    </div>
                </div>
                @if ($post->image)
                    <div class="img-uploaded">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <p>{!! $post->body !!}</p>
                <a href="/posts" class="nav nav-link p-0">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
