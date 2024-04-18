<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
    <title>SimpleRealestate | @yield('title')</title>
</head>
<body>
    @include('partials.nav')
    
    {{ $slot }}
</body>
</html>