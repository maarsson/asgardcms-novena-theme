<!DOCTYPE html>
<html lang="{{ LaravelLocalization::setLocale() }}">
<head>
    @include('layouts.head')
    @include('layouts.styles')
</head>

<body id="top">
<header>
    @auth
        {{-- @include('header.admin-bar') --}}
        {{-- @setting('core::site-name') --}}
    @endauth
    @include('layouts.header.top')
    @include('layouts.header.navigation')
</header>

@yield('content')

<footer class="footer section gray-bg">
    @include('layouts.footer.footer')
</footer>

@include('layouts.scripts')
</body>
</html>
