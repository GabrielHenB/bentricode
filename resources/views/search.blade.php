@extends('components.layout')
@section('adicional')
    Bentricode Pesquisar
@endsection  
@section('content')

    @if($items->count())
        @foreach($items as $item)
        <div class='container'>
            <div class='row'>
                <x-post :item="$item" />
            </div>
        </div>
        @endforeach
    @else
        <div class="container">
            <div class="row">
                <div class="col-3 sem-posts-esquerda">
                    <a href="https://www.freeiconspng.com/img/2749" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/sign-warning-icon-png-7.png" width="80" alt="sign warning icon png" /></a>
                </div>
                <div class="col-9 sem-posts-direita">
                    <p><strong>Uai sô!</strong> Nenhum post foi encontrado!</p>
                </div>
            </div>
        </div>
    @endif

@endsection
@section('sidebar')
<x-sidebar-component />
@endsection