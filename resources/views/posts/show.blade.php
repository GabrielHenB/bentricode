@extends('components.layout')

{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}

@section('adicional')
    - Bentricode - {{$item->title}}
@endsection  

{{-- SECAO DO CONTEUDO --}}

@section('content')
    <div class='container'>
        <div class='row'>
            <x-post :item="$item" />
        </div>
    </div>

@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')

@endsection