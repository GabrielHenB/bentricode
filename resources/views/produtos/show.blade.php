@extends('components.layout')
@section('adicional')
  - Projetos
@endsection
@php
  //Separa a string em um array de strings
  $tecnologias = explode(',', $item->techs);
@endphp
@section('content')
<div class='col-lg-12 col-md-12 p-4 text-bg-light conteudo'>
    <article>
        <header class="mb-4">
            <h1 class="fw-bolder mb1"> {{$item->name}} </h1>
            <!--  meta content-->
            <div class="text-muted fst-italic mb-2"> Inicio: {{ $item->start_date }}</div>
            <div class="text-footer mb-2">
            <!-- tecnologias -->
                @foreach($tecnologias as $thing)
                    <span class="badge text-bg-primary">{{ $thing }}</span>
                @endforeach
            </div>
        </header>
        <!-- colocar somente imagens de 900x400 pixel-->
        <div class="row mb-2">
            <div class="image-container">
                <img class="rounded "
                    src="{{ $item->thumburl != '#' ? asset('storage/'. Str::after($item->thumburl,'public/')) : asset('placeholder.png') }}"
                    alt="Thumbnail" />
            </div>
        </div>

        <!-- Project content-->
        <section class="mb-5">
            <p class="fs-5 mb-4">{!! $item->body !!}</p>
            <h2 class="fw-bolder mb-4 mt-5">Todos os posts são de autoria da BentriCode</h2>
            <p class="fs-5 mb-4">Caso queira utilizar alguma tecnologia Favor entrar em contato para parcerias ou
                para pedir permissão de uso.</p>
        </section>

    </article>
    

    {{--
    <div class="text-center">
        <div class=" text-center text-light  m-0">
            <p class="mb-2">{{ $item->name }}</p>
            <footer class="text-footer mb-2">Inicio: {{ $item->start_date }} utilizando 
                @foreach($tecnologias as $thing)
                    <span class="badge text-bg-primary">{{ $thing }}</span>
                @endforeach
            </footer>
        </div>
        <img class="img-fluid img-fluid rounded w-48 m-4 float-start imagem-projeto"
            src='{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png') }}'
            alt="Thumbnail">
    </div>
    <p class="lead mt-3 ms-2 conteudo-projetos text-justify">{!! $item->body !!}</p>
</div> --}}
@endsection
@section('sidebar')
@endsection