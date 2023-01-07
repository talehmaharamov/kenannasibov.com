<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
</head>
<body>
    @include('frontend.includes.navbar')
    @yield('front')
    @include('frontend.includes.footer')
    @include('frontend.includes.scripts')
@yield('scripts')
</body>
</html>
