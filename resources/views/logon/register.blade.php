{{-- TODO A View to create a new post --}}
@extends('components.layout')
@section('adicional')
  - Cadastre-se
@endsection

@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class='container'>
        <div class='row titulo-pagina'>
            <h2 class='col-12 center'>Crie uma conta Bentricode!</h2>
        </div>
        <div class="container form-wrapper">
            <form action="create" method="POST" enctype="multipart/form-data" class="form-wrap">
                @csrf
                <x-form-item name='email' type='email' placeholder='email@dominio.com' value="{{old('email')}}" required/>
                <x-form-item name='name' placeholder='Seu nome' value="{{old('name')}}" required/>
                <x-form-item name='password' type='password' required/>
                <x-form-item name='avatar' type='file' />
                  <button type="submit" class="btn btn-primary">Criar</button>
            </form>
        </div>
    </div>
@endsection
