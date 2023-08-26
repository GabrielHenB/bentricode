@props(['gotoRoute'])
<div class="row mb-3">
    <div class="col">
        <a class="btn btn-primary" href="{{url('dashboard/posts')}}">Posts</a>
        <a class="btn btn-primary" href="{{url('dashboard/projs')}}">Projetos</a>
    </div>
    <div class="col ms-auto d-flex justify-content-end">

        <a class="btn btn-success" href="{{ $gotoRoute }}">Adicionar Novo Item</a>

    </div>
</div>