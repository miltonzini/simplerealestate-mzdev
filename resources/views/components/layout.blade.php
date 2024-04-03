<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
    <title>Home</title>
</head>
<body>
        <nav class="navbar">
            <a href="" class="navbar-link">Link 1</a>
            <a href="" class="navbar-link">Link 2</a>
            <a href="" class="navbar-link">Link 4</a>
        </nav>
    {{ $slot }}
</body>
</html>