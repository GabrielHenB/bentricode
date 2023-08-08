@extends('components.layout')
@section('adicional')
    Bentricode Pesquisar
@endsection
@section('content')

    @if ($items->count())
    <div class='container'>
        <h3 class="d-inline bg-dark bg-opacity-50 p-3"><span>Resultados para a
                pesquisa: </span> &nbsp;&nbsp;{{ request('squery') ?? 'Pesquisar' }}</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-5 justify-content-center g-3">
            @foreach ($items as $item)
                <x-post :item="$item" />
            @endforeach
        </div>
    </div>
    @else
        <div class="container ">
            <div class="row ">
                <h3 class="d-inline bg-dark bg-opacity-50 p-3"><span>Resultados para a
                        pesquisa: </span> &nbsp;&nbsp;{{ request('squery') ?? 'Pesquisar' }}</h3>
                <div class="col-12 d-flex justify-content-center align-items-center">

                    <a href="https://www.freeiconspng.com/img/2749" title="Image from freeiconspng.com">
                        <img src="https://www.freeiconspng.com/uploads/sign-warning-icon-png-7.png"
                            width="80"alt="sign warning icon png" /></a>



                </div>
                <div class="col-12 sem-posts-direita text-center">
                    <p><strong>Uai sô!</strong> Nenhum post foi encontrado!</p>
                </div>
            </div>
        </div>
    @endif

@endsection
@section('sidebar')
    <x-sidebar-component />
@endsection
