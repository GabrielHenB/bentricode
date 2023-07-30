@extends('components.layout')
@section('adicional')
    - Posts
@endsection  
@section('content')
    <div class='conteiner'>
        <div class='row'>
            <h1 class='col-4'>BENTRICODE - v 1 . 0 . 0</h1>
            <p class='col-8'>Insira os posts aqui e seus layouts.</p>
        </div>
        @foreach($post as $item)
            <h2>{{$item->title}}</h2>
            <div> {!! $item->body !!} </div>
        @endforeach
    </div>

@endsection