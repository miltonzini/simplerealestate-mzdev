<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
    <title>SimpleRealestate | @yield('title')</title>
</head>
<body>
        <nav class="navbar">
            <div class="first-block ">
                <a href="{{ route('home') }}" class="button navbar-link {{ setActiveRoute('home') }}">Home</a>
                <a href="{{ route('about') }}" class="button navbar-link {{ setActiveRoute('about') }}">About</a>
                <a href="{{ route('properties') }}" class="button navbar-link {{ setActiveRoute('properties') }}">Properties</a>
                <a href="{{ route('contact') }}" class="button navbar-link {{ setActiveRoute('contact') }}">Contact</a>
            </div>
            <div class="second-block">
                <!-- <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a> -->
                <a href="{{ route('login') }}" class="button login-button">Login</a>
            </div>
        </nav>
    {{ $slot }}
</body>
</html>