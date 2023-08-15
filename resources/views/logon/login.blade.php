{{-- TODO A View to create a new post --}}
@extends('components.layout')
@section('adicional')
  - Login
@endsection

@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class='container'>
        <div class='row titulo-pagina'>
            <h2 class='col-12 center'>Entre na sua conta Bentricode!</h2>
            <small>Ainda não possuí uma conta ? <a href='register'> Cadastre-se</a></small>
        </div>
        <div class="container form-wrapper">
            <form action="{{url('login')}}" method="POST" enctype="multipart/form-data" class="form-wrap">
                @csrf
                <x-form-item name='email' type='email' placeholder='email@dominio.com' required/>
                <x-form-item name='password' type='password' required/>
                  <button type="submit" class="btn btn-primary">Logar</button>
            </form>
        </div>
    </div>
@endsection
