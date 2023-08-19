{{-- A View to create a new project --}}
@extends('components.layout')
@section('adicional')
  - Adicionar Projeto
@endsection

@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class='container'>
        <div class='row titulo-pagina'>
            <h2 class='col-12 center'>Adicionar um Novo Projeto</h2>
        </div>
        <div class="container form-wrapper">
            <form action="{{route('projetos.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form-item name='name' placeholder='Titulo do Projeto' value="{{old('name')}}" required />
                <!-- temporario -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">O projeto já está completo ?</label>
                    <select name="is_completo" class="form-control" id="exampleFormControlSelect1">
                      <option value='1'>Sim</option>
                      <option value='0'>Não</option>
                    </select>
                </div>
                <!-- temporario -->
                <x-form-item name='description' type='textarea' tamanho='2' value="{{old('description')}}" required />
                <x-form-item name='body' type='textarea' tamanho='2' value="{{old('body')}}" />
                <x-form-item name='techs' placeholder='Tecnologias, Separadas, Por, Virgula' value="{{old('techs')}}"  required />
                <x-form-item name='start_date' type='date' value="{{old('start_date')}}" required />
                <x-form-item name='thumburl' type='file' />
                  <button type="submit" class="btn btn-primary">Criar</button>
            </form>
        </div>
    </div>
@endsection
