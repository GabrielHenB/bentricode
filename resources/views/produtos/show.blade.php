@extends('components.layout')
@section('adicional')
  - Projetos
@endsection
@php
  //Separa a string em um array de strings
  $tecnologias = explode(',', $item->techs);
@endphp
@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class="row">
        <div class="col-8 text-end">
            <img src="{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png') }}"
             alt="" style="max-width:700px" class="rounded w-40 m-2 imagem-projeto">
        </div>
        <div class="col-4 text-start">
            <p class="mb-2">{{ $item->name }}</p>
            <footer class="text-footer mb-2">Inicio: {{ $item->start_date }} utilizando 
                @foreach($tecnologias as $thing)
                    <span class="badge text-bg-primary">{{ $thing }}</span>
                @endforeach
            </footer>
            <p class="lead mt-3 ms-2 conteudo-projetos text-justify">{!! $item->body !!}</p>
        </div>
    </div>

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