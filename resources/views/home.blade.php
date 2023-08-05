@extends('components.layout')
{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}
@section('adicional')
    - Home
@endsection  

{{-- SECAO DO CONTEUDO --}}

@section('content')
    <div class='container'>
        <div class='row'>
            <h1 class='col-4'>BENTRICODE - v 1 . 0 . 0</h1>
            <p class='col-8'>Isso é apenas um placeholder para um grande projeto!<br>
            </p>

        </div>
    </div>
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
<x-sidebar-component />
@endsection