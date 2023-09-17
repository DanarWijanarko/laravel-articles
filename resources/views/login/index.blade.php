@extends('templates.layouts.main')

@section('content')
    <div class="container-fluid py-4 ms-5">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                @if (session()->has('success'))
                    <div class="ms-5">
                        <div class="alert alert-success alert-dismissible fade show mx-5" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="ms-5">
                        <div class="alert alert-danger alert-dismissible fade show mx-5" role="alert">
                            <strong>{{ session('error') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                    <div class="card-body p-5 shadow-lg text-center">
                        <h2 class="fw-bold mb-5">Please Login Now</h2>
                        <form action="/login" method="POST">
                            @csrf
                            <!-- Email input -->
                            <div class="form-floating mb-4">
                                <input type="text" id="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="Email Address" value="{{ old('email') }}" autofocus />
                                <label class="form-label" for="email">Email address</label>
                                @error('email')
                                    <div class="my-feedback invalid-feedback text-start ms-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="form-floating mb-4">
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" />
                                <label class="form-label" for="password">Password</label>
                                @error('password')
                                    <div class="my-feedback invalid-feedback text-start ms-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
                            <div class="text-center">
                                <p class="d-inline">Don't Have an Account? </p>
                                <a href="/register" class="text-decoration-none">Register Now!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://source.unsplash.com/500x700?car" class="w-75 rounded-4 shadow-lg" alt="" />
            </div>
        </div>
    </div>
@endsection
