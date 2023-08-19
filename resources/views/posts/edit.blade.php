@extends('components.layout')
@section('adicional')
  - Editar Post
@endsection

@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class='container'>
        <div class='row titulo-pagina'>
            <h2 class='col-12 center'>Editar um Post</h2>
        </div>

        <!-- colocar somente imagens de 900x400 pixel-->
        <div class="row mb-2">
            <div class="image-container">
                <img class="rounded "
                    src="{{ $post->thumburl != '#' ? asset('storage/'. Str::after($post->thumburl,'public/')) : asset('placeholder.png') }}"
                    alt="Thumbnail Anterior" />
            </div>
        </div>

        <div class="container form-wrapper">
            <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-form-item name='title' placeholder='Titulo do Post' :value="$post->title" />
                
                <x-form-item name='body' type='textarea' tamanho='2' :value="$post->body" />
                
                <x-form-item name='thumburl' type='file' />
                  <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection