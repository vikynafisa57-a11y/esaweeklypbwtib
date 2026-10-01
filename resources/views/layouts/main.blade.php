<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Portfolio Viky')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            Viky.
        </div>

        <div class="nav-menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('berita') }}">Berita</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

    </nav>


    <main>
        @yield('content')
    </main>


    <footer>
        <p>© 2026 Viky Diana Nafisa</p>
    </footer>

</body>

</html>