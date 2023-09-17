@extends('templates.layouts.main')

@section('content')
    <h2 class="mt-4 mb-2 text-center">{{ $header }}</h2>

    <div class="row justify-content-end">
        <div class="col-md-5">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Article Here..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card my-4">
            @if ($posts[0]->image)
                <div class="img-uploaded">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                    alt="{{ $posts[0]->category->name }}" class="img-fluid">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <h6 class="card-subtitle mb-3 text-body-secondary">By :
                    <a href="/posts?author={{ $posts[0]->author->username }}"
                        class="nav nav-link p-0 d-inline">{{ $posts[0]->author->name }}</a>, in
                    <a href="/posts?category={{ $posts[0]->category->slug }}"
                        class="nav nav-link p-0 d-inline">{{ $posts[0]->category->name }}</a>
                </h6>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">See Detail</a>
            </div>
        </div>

        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="position-absolute m-1 px-2 py-1"
                            style="background-color: rgba(255, 255, 255, 0.7);border-radius: 5px">
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="text-dark text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        @if ($post->image)
                            <div class="img-uploaded">
                                <img src="{{ asset('storage/' . $post->image) }}"
                                    alt="{{ $post->category->name }}" class="card-img-top">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-3 text-body-secondary">By :
                                <a href="/posts?author={{ $post->author->username }}"
                                    class="nav nav-link p-0 d-inline">{{ $post->author->name }}</a>
                            </h6>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated
                                    {{ $post->created_at->diffForHumans() }}</small></p>
                            <a href="/posts/{{ $post->slug }}" class="nav nav-link p-0">See Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h3 class="text-center">No Article Found.</h3>
    @endif

    {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection
