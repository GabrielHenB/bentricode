@extends('components.layout')

{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}

@section('adicional')
    Bentriprojetos
@endsection  

{{-- SECAO DO CONTEUDO --}}

@section('content')
<div class='col-lg-9 col-md-12 conteudo'>
    <div class='container'>
        <div class='row'>
            <h2 class='col-12 center'>Nossos Projetos</h2>
        </div>
        <div class="conteiner">
            <div class="row cards-posts">
                
                @foreach($produtos as $item)
                    <x-product :item="$item" />
                @endforeach
            </div>
            <div class="row pagination">
                {{$produtos->links()}}
            </div>
        </div>
        
    </div>
</div>
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
            
@endsection