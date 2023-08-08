@extends('components.layout')

{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}

@section('adicional')
    - Bentricode - {{ $item->title }}
@endsection

{{-- SECAO DO CONTEUDO --}}

@section('content')
    <div class="text-center ">
        <blockquote class="blockquote text-center text-light  m-0">
            <p class="mb-2">{{ $item->title }}</p>
            <footer class="blockquote-footer ">Post: {{ $item->created_at->diffForHumans() }} by <cite
                    title="Título da fonte">{{ $item->author->name }}</cite></footer>
        </blockquote>
        <img class="img-fluid img-fluid rounded w-50 "
            src='{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png') }}'
            alt="Thumbnail">
    </div>
    <p class="lead mt-3 ms-2 paragrafos text-justify">{!! $item->body !!}</p>
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
@endsection
