@extends('components.layout')

@section('adicional')
 - Admin Dashboard
@endsection

@section('content')
<h2>Dashboard Admin</h2>
<a href="?see=posts">Posts</a>
<a href="?see=projetos">Projetos</a>

<table class="table lista-posts-admin">
    <thead>
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Titulo</th>
            <th scope='col'>Autor</th>
            <th scope='col'>Criado em</th>
            <th scope='col'>Atualizado em</th>
            <th scope='col'>Funções</th>
        </tr>
    </thead>
    <tbody>
        @if(request()->input('see') == 'projetos')
        @foreach($produtos as $produto)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td> {{$produto->name}} </td>
                <td> {{$produto->techs}} </td>
                <td> {{$produto->created_at}} </td>
                <td> {{$produto->updated_at}} </td>
                <td>
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Remover</button>
                </td>
            </tr>
        @endforeach
        @else
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td> {{$post->title}} </td>
                <td> {{$post->author->name}} </td>
                <td> {{$post->created_at}} </td>
                <td> {{$post->updated_at}} </td>
                <td>
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Remover</button>
                </td>
            </tr>
        @endforeach
        @endif
    </tbody>
</table>

@endsection

@section('sidebar')
<!-- Nothing here -->
@endsection