<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
@include('layouts.partials.navbar')
<div class="app-body">
    @include('layouts.partials.sidebar')
    <main class="main">
        <div class="container-fluid">
            <div class="animated fadeIn mt-4">
                @include('layouts.partials.toolbar')
                @yield('content')
            </div>
        </div>
    </main>
</div>
@include('layouts.partials.footer')
@include('layouts.partials.scripts')
</body>
</html>

