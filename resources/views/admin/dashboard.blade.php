@extends('components.layout')

@section('adicional')
    - Admin Dashboard
@endsection

@section('content')
    <div class="container">

        <div class="row ">
            <h2>Dashboard Admin</h2>
            <hr class="mt-3">
        </div>

        <div style="padding: 8px;" class="row bg-dark rounded">
            <div class="col estatisticas">
                <div class="border border-black rounded">
                    <ul class="list-group">
                        <li class="list-group-item"> <strong>Posts:</strong> {{$posts->count()}}</li>
                        <li class="list-group-item"> <strong>Projetos:</strong> {{ $produtos->count() }} </li>
                        <li class="list-group-item"> <strong>Usuários:</strong> ? </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-12 funcoes">
                <h2 class="text-center">Funções Admin</h2>
                <ul style="list-style: none;" class="d-flex justify-content-evenly rounded bg-light p-2">
                    <li class="ml-4"><a class="btn btn-primary" href="{{url('dashboard/posts')}}">Posts</a></li>
                    <li class="ml-4"><a class="btn btn-primary" href="{{url('dashboard/projs')}}">Projetos</a></li>
                    <li class="ml-4"><a class="btn btn-primary" href="{{url('dashboard/users')}}">Usuários</a></li>
                    <li class="ml-4"><a class="btn btn-primary" href="{{url('dashboard')}}">Configurações</a></li>
                </ul>
            </div>
        </div>

        <div style="padding: 8px; margin-top: 5px;" class="row bg-dark rounded text-dark gap-4 justify-content-center">
            <div class="col-md-4 col-7 bg-light rounded ">
                <canvas id="grafico"></canvas>
            </div>
            <div class="col-md col-12  bg-light border rounded text-dark">
                <h1 class="text-center">Mais Recentes</h1>
                <div class="row text-center card-dashboard">
                    @if($posts->count())
                        <p><a href="{{route('posts.show',$posts[0]->id)}}">{{ $posts[0]->title }}</a></p>
                        <span class="small">{{ $posts[0]->created_at }}</span>
                        <hr>
                        <p><a href="{{route('projetos.show',$produtos[0]->id)}}">{{ $produtos[0]->name }}</a></p>
                        <p> {{ $produtos[0]->description }} </p>
                        <span class="small">{{ $produtos[0]->created_at }}</span>
                    @else
                        <p>Sem posts no momento</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const grafico = document.getElementById('grafico');
        console.log(grafico);
        const data = {
            labels: [
                'Posts',
                'Projetos',
                'Usuários'
            ],
            datasets: [{
                label: 'Itens do Site',
                data: [{{$posts->count()}},{{$produtos->count()}}, {{$users}}],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        new Chart(grafico, {
            type: 'pie',
            data: data
        });
    </script>

@endsection

@section('sidebar')
    <!-- Nothing here -->
@endsection
