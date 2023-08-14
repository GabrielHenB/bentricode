@extends('components.layout')

@section('adicional')
    - Admin Dashboard
@endsection

@section('content')
    <div class="container">

        <div class="row ">
            <h2>Dashboard Admin</h2>



            <hr class="mt-3">
        </div>


        <table class="table lista-posts-admin">
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Titulo</th>
                    <th scope='col'>{{ request()->input('see') == 'projetos' ? 'Tecnologias' : 'Autor' }}</th>
                    <th scope='col'>Criado em</th>
                    <th scope='col'>Atualizado em</th>
                    <th scope='col'>Funções</th>
                </tr>
            </thead>
            <tbody>
                @if (request()->input('see') == 'projetos')
                    @foreach ($produtos as $produto)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td> <a href="{{route('projetos.show',$produto->id)}}">{{ $produto->name }}</a> </td>
                            <td> {{ $produto->techs }} </td>
                            <td> {{ $produto->created_at }} </td>
                            <td> {{ $produto->updated_at }} </td>
                            <td>
                                <button type="button" class="btn btn-primary">Editar</button>
                                <form class="dashboard-remove" action='{{route('projetos.destroy', $produto->id)}}' method='POST'>
                                    {{csrf_field()}}
                                    @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza?')" class="btn btn-danger btn-remover">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <div class="row mb-3">
                        <div class="col">
                            <a class="btn btn-primary" href="?see=posts">Posts</a>
                            <a class="btn btn-primary" href="?see=projetos">Projetos</a>


                        </div>
                        <div class="col ms-auto d-flex justify-content-end">

                            <a class="btn btn-success" href="{{ route('posts.create') }}">Adicionar Novo Projeto</a>

                        </div>
                    </div>


                    {{ $produtos->links() }}
                @else
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td> <a href="{{route('posts.show',$post->id)}}">{{ $post->title }}</a> </td>
                            <td> {{ $post->author->name }} </td>
                            <td> {{ $post->created_at }} </td>
                            <td> {{ $post->updated_at }} </td>
                            <td>
                                <button type="button" class="btn btn-primary">Editar</button>
                                <form class="dashboard-remove" action='{{route('posts.destroy', $post->id)}}' method='POST'>
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Tem certeza?')" class="btn btn-danger btn-remover">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <div class="row mb-3">
                        <div class="col">
                            <a class="btn btn-primary" href="?see=posts">Posts</a>
                            <a class="btn btn-primary" href="?see=projetos">Projetos</a>


                        </div>
                        <div class="col ms-auto d-flex justify-content-end">
                            <a class=" btn btn-success" href="{{ route('posts.create') }}">Adicionar Novo Post</a>
                        </div>
                    </div>

                    {{ $posts->links() }}
                @endif
            </tbody>
        </table>
    </div>



@endsection

@section('sidebar')
    <!-- Nothing here -->
@endsection
