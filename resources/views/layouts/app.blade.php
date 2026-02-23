<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','My WebApp')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<header class="navbar">
    <div class="logo">My WebApp</div>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    </nav>
</header>

<div class="content">
    @yield('content')
</div>

<footer class="footer">
    <p>© 2026 My WebApp | All Rights Reserved</p>
</footer>
</body>
</html>
