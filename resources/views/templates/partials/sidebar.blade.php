<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('img/brand-hanni.jpeg') }}" class="img-profile rounded-circle">
        </div>
        <div class="sidebar-brand-text mx-3">Nar News</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider ">

    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/posts">
            <i class="fa-solid fa-signs-post"></i>
            <span>My Articles</span>
        </a>
    </li>

    @can('isAdmin')
        <hr class="sidebar-divider ">

        <div class="sidebar-heading">
            Administrator
        </div>

        <li class="nav-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/categories">
                <i class="fa-solid fa-signs-post"></i>
                <span>My Category</span>
            </a>
        </li>
    @endcan

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
