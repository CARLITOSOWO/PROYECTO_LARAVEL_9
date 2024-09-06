<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO WEB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
    <p>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('posts.index') }}">Blog</a>

        @auth
        <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        @endauth

    </p>

    <hr>

    @yield('content')

</body>
</html>