<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
</head>
<body>
<div class="body">
    @include('frontend.includes.navbar')
    @yield('content')
    @include('frontend.includes.footer')
    @include('frontend.includes.scripts')
</div>

</body>
</html>
