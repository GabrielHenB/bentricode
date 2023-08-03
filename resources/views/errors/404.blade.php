@extends('components.layout')
@section('adicional')
    404 - Bentricode
@endsection  
@section('content')
    <div class='container errors'>
        <div class='row'>
            <div class="col-12">
                <h2 style='color:darkred'>ERRO 404</h2>
            </div>
        </div>
        <div class='row'>
            <div class="col-12">
                <p style='color:darkred'>Uai sô, essa página num existe!</p>
            </div>
        </div>
    </div>

@endsection
@section('sidebar')
<x-sidebar />
@endsection