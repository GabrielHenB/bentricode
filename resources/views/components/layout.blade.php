<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bentricode Services @yield('adicional')</title>
    <link rel="icon" src="/bentricon.ico" />
    {{-- <link rel='stylesheet' src='{{asset('shared/app.css')}}' --}}
    {{-- O vite carrega e constroi as dependencias --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <!-- Header inicio -->
    <!-- Isso depois pode ser extraido para um Blade component -->
    <header class="conteiner header-conteiner">
        <div class="row header-row">
            <div class="col-3 logo">
                <a href='/'>
                <img style="width:180px; height: 150px;" src="{{asset('logo.PNG')}}" alt="BENTRICODE"/>
                </a>
            </div>
            <div class="col-9 navegacao">
                <nav class="navbar">
                    <a class="btn btn-dark" href="{{route('home')}}">Home</a>
                    <a class="btn btn-dark" href="{{route('posts.index')}}">Noticias</a>
                    <a class="btn btn-dark" href="products">Produtos</a>
                    <a class="btn btn-dark" href="about">Sobre Nós</a>
                    <a class="btn btn-dark" href="careers">Carreiras</a>
                </nav>
            </div>
            
        </div>
    </header>
    <!-- Header final -->
    <!-- Conteudo inicio -->
    {{-- Isso traz quaisquer que esteja em content no que extender essa view --}}
    <main class='conteiner main'>
        <div class='row main'>
            <div class='col-8 conteudo'>
                    @yield('content')
            </div>
            <div  class='col-4 lateral'>
                <!-- Sidebar inicio -->
                    @include('components.sidebar')
                <!-- Sidebar final -->
            </div>
        </div>
    </main>
    <!-- Conteudo final -->
    
    <!-- Footer inicio -->
    <footer>
        
        
    </footer>
    <!-- Footer final -->
</body>
</html>