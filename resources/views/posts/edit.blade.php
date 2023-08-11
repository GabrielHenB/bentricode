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
        <div class="container form-wrapper">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-form-item name='title' placeholder='Titulo do Post' :value="$post->title" />
                
                <x-form-item name='body' type='textarea' tamanho='2' :value="$post->body" />
                <img src="{{$post->thumburl}}" alt="Thumbnail Anterior" />    
                <x-form-item name='thumburl' type='file' />
                  <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection