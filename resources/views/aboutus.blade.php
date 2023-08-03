@extends('components.layout')
@section('adicional')
    Sobre a Bentricode
@endsection  
@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-3 titulo-esquerda">
                <h1>Sobre nosotros</h1>
            </div>
            <div class="col-9 descricao-direita">
                Somos a Bentricode! Seu código está bentricodado aqui!
            </div>
        </div>
    </div>

@endsection
@section('sidebar')
<x-sidebar />
@endsection