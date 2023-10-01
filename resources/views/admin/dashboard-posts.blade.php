@extends('components.layout')

@section('adicional')
    - Admin Dashboard - Posts
@endsection

@section('content')
    <div class="container">

        <div class="row ">
            <h2> <a href="{{route('dashboard')}}" style="text-decoration: none; color: skyblue;">Dashboard</a> > Posts</h2>
            <hr class="mt-3">
        </div>
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
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td> <a href="{{route('posts.show',$post->id)}}">{{ $post->title }}</a> </td>
                            <td> {{ $post->author->name }} </td>
                            <td> {{ $post->created_at }} </td>
                            <td> {{ $post->updated_at }} </td>
                            <td>
                                <button type="button" onclick="window.location.href='{{route('posts.edit', $post->id)}}'" class="btn btn-primary">Editar</button>
                                <form class="dashboard-remove" action='{{route('posts.destroy', $post->id)}}' method='POST'>
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Tem certeza?')" class="btn btn-danger btn-remover">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <x-dashboard-header gotoRoute="{{route('posts.create')}}" />
                {{-- PAGINACAO --}}
                {{$posts->links()}}
            </tbody>
        </table>
    </div>



@endsection

@section('sidebar')
    <!-- Nothing here -->
@endsection
