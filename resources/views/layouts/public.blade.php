<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show" style="background-color: #f0f9ff">
    @include('layouts.partials.navbar')
    <div class="container">
        @yield('content')
    </div>
@include('layouts.partials.scripts')
</body>
</html>

