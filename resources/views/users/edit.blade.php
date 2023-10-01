{{--  EDITAR PROJETO --}}
@extends('components.layout')
@section('adicional')
  - Editar Usuário
@endsection

@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class='container'>
        <div class='row titulo-pagina'>
            <h2 class='col-12 center'>Editar o Usuário: {{$item->name}}</h2>
        </div>
        <div class="container form-wrapper">
            <form action="{{route('users.update', $item)}}" method="POST" enctype="multipart/form-data" class="form-wrap">
                @csrf
                @method('PATCH')
                <x-form-item name='name' placeholder='Nome' value="{{old('name') ?? $item->name}}" class="excludeMatching" required/>
                <x-form-item name='email' type='email' placeholder='email@dominio.com' value="{{old('email') ?? $item->email}}" required/>
                <x-form-item name='password' type='password' class="editUserPasswordInput" />
                <div class="form-group">
                    <label for="exampleFormControlSelect1">O usuário é admin ?</label>
                    <select name="isAdmin" class="form-control" id="exampleFormControlSelect1">
                      
                      <option value='0'>Não</option>
                      <option value='1'>Sim</option>
                      
                    </select>
                </div>
                <x-form-item name='avatar' type='file' class="notRequired" />
                  <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection
