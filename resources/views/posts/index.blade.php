@extends('components.layout')

{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}

@section('adicional')
    - Posts
@endsection  

{{-- SECAO DO CONTEUDO --}}

@section('content')
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

@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
<div class="container">
    <div class="row barra-lateral-generica">
        <div class="col-12 item-barra-lateral-generica">
            Barra Lateral Generica
        </div>
        <div class="col-12 item-barra-lateral-generica">
            Não sei o que colocar aqui ainda
        </div>
        <div class="col-12 item-barra-lateral-generica">
            Talvez um menu secundário?
        </div>
        <div class="col-12 item-barra-lateral-generica">
            Eu gosto de sorvete
        </div>
    </div>
</div>
@endsection