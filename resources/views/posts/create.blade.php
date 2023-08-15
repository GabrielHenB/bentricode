{{-- TODO A View to create a new post --}}
@extends('components.layout')
@section('adicional')
  - Criar Post
@endsection

@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class='container'>
        <div class='row titulo-pagina'>
            <h2 class='col-12 center'>Criar um Novo Post</h2>
        </div>
        <div class="container form-wrapper">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" class="form-wrap">
                @csrf
                <x-form-item name='title' placeholder='Titulo do Post' />
                <!-- temporario -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Autor:</label>
                    <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                      <option value='1'>Gabriel</option>
                      <option value='2'>Márlon</option>
                    </select>
                </div>
                <!-- temporario -->
                <x-form-item name='body' type='textarea' tamanho='2' />
                <x-form-item name='thumburl' type='file' />
                  <button type="submit" class="btn btn-primary">Criar</button>
            </form>
        </div>
    </div>
@endsection
