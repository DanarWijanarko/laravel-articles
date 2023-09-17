@extends('templates.layouts.dashboard')

@section('container')
    <div class="container mb-5">
        <h1 class="text-center mb-4">{{ $post->title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <h5>
                    <a href="/dashboard/posts" class="btn btn-primary text-white py-1 px-2">
                        <i class="fa-solid fa-arrow-left"></i> Back to My Articles
                    </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white py-1 px-2">
                        <i class="fa-solid fa-pencil"></i> Edit Article
                    </a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline show_confirm">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger text-white py-1 px-2" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Delete">
                            <i class="fa-solid fa-trash"></i> Delete Article
                        </button>
                    </form>
                </h5>
            </div>
            <div class="col-md-6">
                <small class="float-right text-body-secondary">Last updated {{ $post->created_at->diffForHumans() }}</small>
            </div>
        </div>
        @if ($post->image)
            <div class="img-uploaded">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                class="img-fluid">
        @endif
        <p>{!! $post->body !!}</p>
        <a href="/dashboard/posts" class="nav nav-link p-0">Back to Posts</a>
    </div>
@endsection
