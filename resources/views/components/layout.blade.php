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
                <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="navbar-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('properties') }}" class="navbar-link {{ request()->routeIs('properties') ? 'active' : '' }}">Properties</a>
                <a href="{{ route('contact') }}" class="navbar-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <div class="second-block">
                <!-- <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a> -->
                <a href="#" class="button login-button">Login</a>
            </div>
        </nav>
    {{ $slot }}
</body>
</html>