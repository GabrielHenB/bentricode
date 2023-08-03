@extends('components.layout')
@section('adicional')
    - Bentricode - {{$item->title}}
@endsection  
@section('content')
    <div class='container'>
        <div class='row'>
            <x-post :item="$item" />
        </div>
    </div>

@endsection
@section('sidebar')
<x-sidebar />
@endsection