<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bentricode Services @yield('adicional')</title>
  <link rel="icon" href="{{asset('bentricon.ico')}}">
  {{-- <link rel='stylesheet' src='{{asset('shared/app.css')}}'> --}}
  {{-- O vite carrega e constroi as dependencias --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- teste nao colocar aqui -->
  {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">--}}
  {{--<link rel='stylesheet' src='{{asset('temp.css')}}' /> <!-- teste -->--}}
  {{-- <script src='//unpkg.com/alpinejs' defer></script> --}}
</head>

<body>
  <!-- Header inicio -->
  <!-- Isso depois pode ser extraido para um Blade component -->
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Bentri<span style="color:#782FB7;">Code</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Visitante
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Carrinho</a></li>
                <li><a class="dropdown-item" href="#">Informações</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" style='color:darkred;' href="#">Sair</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('posts.index')}}">Mangás</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin</a>
            </li>
          </ul>
          <form class="d-flex" method="GET" action="{{route('search')}}?squery={{htmlspecialchars(strip_tags(request('squery')))}}">
            <input class="form-control me-2" type="search" name="squery" placeholder="{{request('squery') ?? "Pesquisar"}}" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header final -->


  <!-- Conteudo inicio -->
  {{-- Isso traz quaisquer que esteja em content no que extender essa view --}}
  <main class='container main text-white p-0'>
    @yield('carrosel')
    
    <div class='d-flex main'>
      <div class='col-lg-9 col-md-12 conteudo'>
        @yield('content')
      </div>
      <div class='col-3 d-none d-md-none d-sm-none d-lg-block lateral'>
        <!-- Sidebar inicio -->
        <div class='container lateral border-start border-black border-2 '>
          <section class="posts-recentes p-1">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
              <div class="card-header">Mais vistos</div>
              <x-sidebar-component />
              <!-- Sidebar final -->
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>
  <!-- Conteudo final -->

  <!-- Footer inicio -->
  <footer class="bg-dark ">
    <div class="container">
      <div class="row justify-content-center align-items-center p-4">
        <div class="col-6">
          <p class="text-center">Copyright &#169 2020 - Site official Bentriel Code, autores: Márlon Bento Azevedo e Gabriel Henrique</p>
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