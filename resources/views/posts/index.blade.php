@extends('components.layout')

{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}

@section('adicional')
    - Posts
@endsection  

{{-- SECAO DO CONTEUDO --}}

@section('content')
<div class='col-lg-9 col-md-12 conteudo'>
    <div class='container'>
        <div class='row'>
            <h2 class='col-12 center'>Posts Recentes</h2>
            
        </div>
        <div class="conteiner">
            <div class="row cards-posts">
                <!-- Exemplo de uso de componentes blade. Eles sempre tem o <x-(namespace.componente)> -->
                @foreach($post as $item)
                    <x-post :item="$item" />
                    {{-- Passa o $item como item variavel no componente em components\post.blade.php --}}
                @endforeach
            </div>
        </div>
        
    </div>
</div>
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
            <x-sidebar-component />

@endsection