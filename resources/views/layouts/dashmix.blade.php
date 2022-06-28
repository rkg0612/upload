<html lang="en">
    <head>
    	@include('partials.dashmix._head')
    	@yield('style')
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-dark page-footer-fixed main-content-narrow">
            @include('partials.dashmix._sidenav')
            @include('partials.dashmix._nav')
            <main id="main-container">
            {{-- @include('partials.dashmix._breadcrumb') --}}
                <div class="content">
                	@yield('content')
                </div>
            </main>
            {{-- @include('partials.dashmix._footer') --}}
        </div>
        @include('partials.dashmix._javascript')
        @include('partials.dashmix._helper')
        @yield('modal')
        @yield('scripts')
        @include('partials.dashmix._notify')
    </body>
</html>
