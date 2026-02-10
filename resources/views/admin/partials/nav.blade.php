<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            Talisva Admin
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.winery-slides.*') ? 'active' : '' }}"
                       href="{{ route('admin.winery-slides.index') }}">
                        Winery Slides
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.team-members.*') ? 'active' : '' }}"
                       href="{{ route('admin.team-members.index') }}">
                        Team Members
                    </a>
                </li>
            </ul>

            <form method="POST" action="{{ route('admin.logout') }}" class="d-flex">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

