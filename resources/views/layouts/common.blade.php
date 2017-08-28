<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>
            @yield('title')
        </title>
        @include('common.head')
    </head>
    <body>
        @include('common.header')
        @yield('content')
        @include('common.footer')
    </body>
</html>

