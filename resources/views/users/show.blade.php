@extends('components.layout')
@section('adicional')
  Usuário {{$user->name}}
@endsection

@section('content')
<section class="col-12 detalhes-usuario">
    <div class="row sobre-usuario text-bg-light p-2 m-2">
        <div class="col-3">
            <img src="{{asset('userplaceholder.PNG')}}" width="120" alt="Thumb" />
        </div>
        <div class="col-9">
            <h1>Perfil de {{$user->name}} </h1>
        </div>
    </div>
    <div class="row detalhes-usuario text-bg-light p-2 m-2">
        <div class="col-12">
            Não há detalhes no momento!
            <h2>Seus recursos:</h2>
            Não há recursos associados à essa conta!
        </div>
    </div>
</section>

@endsection