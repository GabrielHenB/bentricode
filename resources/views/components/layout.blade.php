<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bentricode - v1.0.0</title>
    {{-- <link rel='stylesheet' src='{{asset('shared/app.css')}}' --}}
    {{-- O vite carrega e constroi as dependencias --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <!-- Header inicio -->

    <!-- Header final -->
    <!-- Conteudo inicio -->
    {{-- Isso traz quaisquer que esteja em content no que extender essa view --}}
    @yield('content')
    <!-- Conteudo final -->
    
    <!-- Footer inicio -->
    <footer>
        
        
    </footer>
    <!-- Footer final -->
</body>
</html>