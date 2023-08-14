@extends('components.layout')
@section('adicional')
    403 Forbidden
@endsection  
@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">403</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Sem permissão!.</p>
            <p class="lead">
                Essa você não pode acessar meu nobre!
              </p>
            <a href="{{route('home')}}" class="btn btn-primary">Retornar</a>
        </div>
    </div>
</div>   
@endsection
@section('sidebar')
<!-- Emptyness and Sadness -->
@endsection