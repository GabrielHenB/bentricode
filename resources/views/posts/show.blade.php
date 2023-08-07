@extends('components.layout')

{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}

@section('adicional')
    - Bentricode - {{$item->title}}
@endsection  

{{-- SECAO DO CONTEUDO --}}

@section('content')
    <div class="container box-post">
        <div class="row box-post-header">
            <div class="col-3 post-thumb">
                <img src='{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png') }}' alt="Thumbnail" >
            </div>
            <div class="col-9 post-title">
                <h1 class="titulos-posts">{{ $item->title }}</h1>
            </div>
        </div>
        <div class="row box-post-meta">
            <div class="col-6 post-published">
                <span class="x-small">{{ $item->created_at->diffForHumans() }}</span>
            </div>
            <div class="col-6 post-author">
                <span class="x-small autores">{{ $item->author->name }}</span>
            </div>
        </div>
        <div class="row box-post-inside">
            <div class="col-12 box-post-content">
                
                    {{-- Isso sera interpretado como HTML interno quando nao escapado desse jeito --}}
                    {!! $item->body !!}
                
            </div>
        </div>
    </div>

@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')

@endsection