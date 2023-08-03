@extends('components.layout')
@section('adicional')
    - Posts
@endsection  
@section('content')
    <div class='container'>
        <div class='row'>
            <h1 class='col-4'>BENTRICODE - v 1 . 0 . 0</h1>
            <p class='col-8'>Insira os posts aqui e seus layouts.</p>
        </div>
        <!-- Exemplo de uso de componentes blade. Eles sempre tem o <x-(namespace.componente)> -->
        @foreach($post as $item)
            <x-post :item="$item" />
            {{-- Passa o $item como item variavel no componente em components\post.blade.php --}}
        @endforeach
    </div>

@endsection
@section('sidebar')
<x-sidebar />
@endsection