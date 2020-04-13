<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>@yield('title')</title>
        @stack('styles')
    </head>
    <body>
        @yield('content')
    </body>
    @stack('scripts')
</html>
