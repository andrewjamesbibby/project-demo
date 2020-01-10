<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.head')
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @include('layouts.partials.navbar')
        <div class="app-body">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.main')
        </div>
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>

