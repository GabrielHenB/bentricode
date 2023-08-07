@props(['item'])

<div class="card-body">
    <h5 class="card-title">{{$item->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Publicado a {{$item->created_at}}</h6>
    <p class="card-text">{{ $item->body }}</p>
    <a href="#" class="card-link">ler mais</a>
</div>