@extends('templates.layouts.main')

@section('content')
    <div class="container-fluid py-4 ms-5">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://source.unsplash.com/500x700?car" class="w-75 rounded-4 shadow-lg" alt="" />
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-left" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                    <div class="card-body p-5 shadow-lg text-center">
                        <h2 class="fw-bold mb-4">Register Now</h2>
                        <form action="/register" method="POST">
                            @csrf
                            <!-- Full Name input -->
                            <div class="form-floating mb-4">
                                <input type="text" id="full-name"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Full Name" value="{{ old('name') }}" />
                                <label class="form-label" for="full-name">Full name</label>
                                @error('name')
                                    <div class="my-feedback invalid-feedback text-start ms-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Username input -->
                            <div class="form-floating mb-4">
                                <input type="text" id="username"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    placeholder="Username" value="{{ old('username') }}" />
                                <label class="form-label" for="username">Username</label>
                                @error('username')
                                    <div class="my-feedback invalid-feedback text-start ms-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email input -->
                            <div class="form-floating mb-4">
                                <input type="text" id="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="Email Address" value="{{ old('email') }}" />
                                <label class="form-label" for="email">Email address</label>
                                @error('email')
                                    <div class="my-feedback invalid-feedback text-start ms-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="form-floating mb-4">
                                <input type="password" id="pasword"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" />
                                <label class="form-label" for="pasword">Password</label>
                                @error('password')
                                    <div class="my-feedback invalid-feedback text-start ms-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                            <div class="text-center">
                                <p class="d-inline">Have an Account? </p>
                                <a href="/login" class="text-decoration-none">Login Now!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
