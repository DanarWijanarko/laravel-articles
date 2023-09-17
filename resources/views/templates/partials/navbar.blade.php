<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/brand-hanni.jpeg') }}" width="50" class="rounded-circle">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-5 me-auto">
                <li class="nav-item mx-2">
                    <a class="fw-semibold fs-5 nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="fw-semibold fs-5 nav-link {{ $active === 'article' ? 'active' : '' }}" href="/posts">
                        Article
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="fw-semibold fs-5 nav-link {{ $active === 'category' ? 'active' : '' }}"
                        href="/categories">
                        Categories
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="fw-semibold fs-5 nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">
                        About
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">
                                    <i class="bi bi-speedometer2"></i> My Dashboard</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-left"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item me-3 me-lg-0">
                        <a class="fs-5 nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i><span class="fw-bold fs-5"> Login</span>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
