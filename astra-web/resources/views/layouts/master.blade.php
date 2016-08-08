<!DOCTYPE html>

<html lang="en">

    <head>

        @include('layouts.partials._title')

        @yield('link')

        @yield('header')

    </head>

    <body id="page-top">

        @yield('navigation')

        @yield('content')

        @include('layouts.partials._footer')

    </body>
    
</html>
