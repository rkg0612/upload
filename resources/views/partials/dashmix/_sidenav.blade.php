<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <a class="link-fx font-size-md text-dual" href="/">
                <span class="text-white">Helmet Detection</span>
            </a>
            <!-- END Logo -->
            <!-- Options -->
            <div class="d-lg-none">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->
    <!-- Side Actions -->
    <!-- END Side Actions -->
    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-heading">Navigation</li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('home') }}">
                    <i class="nav-main-link-icon fa fa-fw fa-home"></i>
                    <span class="nav-main-link-name">Home</span>
                </a>
            </li>
            @if(auth()->user()->email == 'superadmin@email.com')
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon fa fa-fw fa-user-tie"></i>
                    <span class="nav-main-link-name">Users</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('user.index') }}">
                            <i class="nav-main-link-icon fa fa-columns"></i>
                            <span class="nav-main-link-name">View All</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('user.create') }}">
                            <i class="nav-main-link-icon fa fa-fw fa-plus"></i>
                            <span class="nav-main-link-name">Add New</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li class="nav-main-heading">Personal</li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-main-link-icon si si-logout"></i>
                    <span class="nav-main-link-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>