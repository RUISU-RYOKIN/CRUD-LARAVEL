<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Gerenciamento de Livros</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 CRUD de Livros</p>
    </footer>
</body>
</html>
