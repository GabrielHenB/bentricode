<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bentricode Services @yield('adicional')</title>
    <link rel="icon" href="{{ asset('bentricon.ico') }}">
    {{-- <link rel='stylesheet' src='{{asset('shared/app.css')}}'> --}}
    {{-- O vite carrega e constroi as dependencias --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- teste nao colocar aqui -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    {{-- <link rel='stylesheet' src='{{asset('temp.css')}}' /> <!-- teste --> --}}
    {{-- <script src='//unpkg.com/alpinejs' defer></script> --}}
</head>

<body>
    <!-- Header inicio -->
    <!-- Isso depois pode ser extraido para um Blade component -->
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Bentri<span style="color:#782FB7;">Code</span></a>
                <button class="navbar-toggler botao-menu" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class=" navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projetos.index') }}">Projetos</a>
                        </li>

                        <li class="nav-item">
                            
                            <!-- <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Admin</a> -->
                            <a href="{{ route('dashboard') }}" class="nav-link">Admin</a>
                        </li>
                    </ul>

                </div>
                <form class="d-flex form-pesquisar" method="GET"
                action="{{ route('search') }}?squery={{ htmlspecialchars(strip_tags(request('squery'))) }}">
                <input class="form-control me-2 input-pesquisa" type="search" name="squery"
                    placeholder="{{ request('squery') ?? 'Pesquisar' }}" aria-label="Search">
                <button class="btn btn-outline-success btn-pesquisa" type="submit">Pesquisar</button>
                </form>
                <div class="d-flex align-items-center ms-2 ">
                    <div class="dropdown">
                        <button class="btn text-light dropdown-toggle border-0" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Visitante
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Carrinho</a></li>
                            <li><a class="dropdown-item" href="#">Informações</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: darkred;" href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header final -->

    <!-- Mensagens Flash (aparece so se existir na session) -->
    <x-mensagem />
    <!-- Fim Mensagens -->


    <!-- Conteudo inicio -->
    {{-- Isso traz quaisquer que esteja em content no que extender essa view --}}
    <main class='container main text-white p-0'>
        @yield('carrosel')

        <div class='d-flex main'>
            <!--<div class='col-lg-9 col-md-12 conteudo'> -->
            @yield('content')
            <!-- </div> -->
            <!-- Sidebar inicio (delegado as outras views) -->
            @yield('sidebar')
            <!-- Sidebar final -->
        </div>
    </main>
    <!-- Conteudo final -->

    <!-- Footer inicio -->
    <footer class="bg-dark ">
        <div class="container">
            <div class="row justify-content-center align-items-center p-4">
                <div class="col-6">
                    <p class="text-center">Copyright &#169 2020 - Site official Bentriel Code, autores: Márlon Bento
                        Azevedo e Gabriel Henrique</p>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img class="img-fluid" id="logo" src="logo.png">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer final -->
    <!-- teste nao colocar aqui -->
    {{--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    --}}
</body>

</html>
