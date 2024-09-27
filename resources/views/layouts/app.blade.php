<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi aplicación')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Mi aplicación</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>© 2024 Mi Aplicación</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
