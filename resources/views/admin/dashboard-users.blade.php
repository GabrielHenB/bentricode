@extends('components.layout')

@section('adicional')
    - Admin Dashboard - Usuarios
@endsection

@section('content')
    <div class="container">

        <div class="row ">
            <h2> <a href="{{route('dashboard')}}" style="text-decoration: none; color: skyblue;">Dashboard</a> > Usuários</h2>
            <hr class="mt-3">
        </div>

        <table class="table lista-posts-admin">
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>E-mail</th>
                    <th scope='col'>Criado em</th>
                    <th scope='col'>Atualizado em</th>
                    <th scope='col'>Admin ?</th>
                    <th scope='col'>Funções</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td> <a href="#">{{ $user->name }}</a> </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->created_at }} </td>
                            <td> {{ $user->updated_at }} </td>
                            <td>{{ $user->isAdmin ? "Sim" : "Não" }}</td>
                            <td>
                                <button type="button" onclick="window.location.href='{{route('users.edit', $user->id)}}'" class="btn btn-primary">Editar</button>
                                <form class="dashboard-remove" action='{{route('users.destroy', $user->id)}}' method='POST'>
                                    {{csrf_field()}}
                                    @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza?')" class="btn btn-danger btn-remover">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <x-dashboard-header gotoRoute="{{route('cadastro')}}" />
                {{-- PAGINACAO--}}
                {{$users->links()}}
            </tbody>
        </table>
    </div>



@endsection

@section('sidebar')
    <!-- Nothing here -->
@endsection
