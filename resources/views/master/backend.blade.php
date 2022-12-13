<!doctype html>
<html lang="en">
<head>
    @include('backend.includes.meta')
    @include('backend.includes.styles')
    @yield('styles')
</head>
<body data-topbar="dark">
<div id="layout-wrapper">
    @include('backend.includes.header')
</div>
@include('backend.includes.sidebar')
@yield('content')
@include('backend.includes.scripts')
@yield('scripts')
</body>
</html>
