{{-- TESTE DO BOOTSTRAP, NAO CORRESPONDE A VIEW FINAL --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bentricode Services @yield('adicional')</title>
    <link rel="icon" src="/bentricon.ico" />
    {{-- <link rel='stylesheet' src='{{asset('shared/app.css')}}'> --}}
    {{-- O vite carrega e constroi as dependencias --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- teste nao colocar aqui -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel='stylesheet' src='{{asset('temp.css')}}' /> <!-- teste -->
</head>
<body>
    <!-- Header inicio -->
    <!-- Isso depois pode ser extraido para um Blade component -->
    <!--
    <header class="conteiner header-thingus">
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
                    <a class="btn btn-dark" href="{{route('aboutus')}}">Sobre Nós</a>
                    <a class="btn btn-dark" href="careers">Carreiras</a>
                </nav>
            </div>
        </div>
    </header>
    -->

    <header class="container cabecalho">

        <div class="row cabecalho-area">

            <div class="col-2 logo">
                <!--<img src="{{asset('logo.PNG')}}" alt="Logo">-->
            </div>

            <div class="col-8 menu">
                <input type="checkbox" id="menuToggle">
                <label for="menuToggle" class="menuMobile">
                    
                </label>

                <!--
                    <ul class="nav menuLista">
                    <li class="nav-item">
                      <a class="nav-link" href="#">lançamentos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">em destaque</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">avaliações</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">entrevistas & makingOff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">novidades</a>
                    </li>
                </ul> -->
                <ul class="menuLista">
                    <li>
                      <a href="#" id="botaoLancamentos">lançamentos</a>
                    </li>
                    <li>
                      <a href="#cartazesEmDestaque">em destaque</a>
                    </li>
                    <li>
                      <a href="#caixa-avaliacoes">avaliações</a>
                    </li>
                    <li>
                      <a href="#jumpToEntrevistas">entrevistas & makingOff</a>
                    </li>
                    <li>
                        <a href="#jumpToNovidades">novidades</a>
                    </li>
                </ul>
                
            </div>

            <div class="col-2 pesquisar">
                <form id="form-pesquisar">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button" id="botao-pesquisar">Ir</button>
                        </div>
                        <input type="text" class="form-control" id="caixa-pesquisar" placeholder="Pesquisar" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </form>
            </div>

        </div>

    </header>

    <!-- Header final -->
    <!-- Conteudo inicio -->
    {{-- Isso traz quaisquer que esteja em content no que extender essa view --}}
    <main class='conteiner main'>
        <div class='row main'>
            <div class='col-8 conteudo'>
                    {{-- @yield('content') --}}
                    <div class='row teste-cont'>
                        <div class="col-6 teste-esq">
                            <h1>Sobre Nosotros</h1>
                        </div>
                        <div class="col-6 teste-dir">
                            <p>Somos uma pagina de desenvolvimento de software</p>
                        </div>
                    </div>
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
    <!-- teste nao colocar aqui -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>