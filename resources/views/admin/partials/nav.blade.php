<aside class="admin-sidebar d-flex flex-column">
    <div class="admin-sidebar-header">
        <span class="admin-sidebar-brand">
            Talisva Admin
        </span>
    </div>

    <nav class="admin-sidebar-nav flex-grow-1">
        <ul class="list-unstyled mb-0">
            <li>
                <a href="{{ route('admin.winery-slides.index') }}"
                   class="admin-sidebar-link {{ request()->routeIs('admin.winery-slides.*') ? 'is-active' : '' }}">
                    Winery Experience Slides
                </a>
            </li>
            <li>
                <a href="{{ route('admin.brand-experience-slides.index') }}"
                   class="admin-sidebar-link {{ request()->routeIs('admin.brand-experience-slides.*') ? 'is-active' : '' }}">
                    Brand Experience Slides
                </a>
            </li>
            <li>
                <a href="{{ route('admin.team-members.index') }}"
                   class="admin-sidebar-link {{ request()->routeIs('admin.team-members.*') ? 'is-active' : '' }}">
                    Team Members
                </a>
            </li>
        </ul>
    </nav>

    <div class="admin-sidebar-footer">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-light btn-sm w-100">
                Logout
            </button>
        </form>
    </div>
</aside>

