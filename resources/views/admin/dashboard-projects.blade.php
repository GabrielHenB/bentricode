@extends('components.layout')

@section('adicional')
    - Admin Dashboard
@endsection

@section('content')
    <div class="container">

        <div class="row ">
            <h2> <a href="{{route('dashboard')}}" style="text-decoration: none; color: skyblue;">Dashboard</a> > Projetos</h2>
            <hr class="mt-3">
        </div>

        <table class="table lista-posts-admin">
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Titulo</th>
                    <th scope='col'>Tecnologias</th>
                    <th scope='col'>Criado em</th>
                    <th scope='col'>Atualizado em</th>
                    <th scope='col'>Funções</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td> <a href="{{route('projetos.show',$produto->id)}}">{{ $produto->name }}</a> </td>
                            <td> {{ $produto->techs }} </td>
                            <td> {{ $produto->created_at }} </td>
                            <td> {{ $produto->updated_at }} </td>
                            <td>
                                <button type="button" onclick="window.location.href='{{route('projetos.edit', $produto->id)}}'" class="btn btn-primary">Editar</button>
                                <form class="dashboard-remove" action='{{route('projetos.destroy', $produto->id)}}' method='POST'>
                                    {{csrf_field()}}
                                    @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza?')" class="btn btn-danger btn-remover">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <x-dashboard-header gotoRoute="{{route('projetos.create')}}" />
                {{-- PAGINACAO--}}
                {{$produtos->links()}}
            </tbody>
        </table>
    </div>



@endsection

@section('sidebar')
    <!-- Nothing here -->
@endsection
