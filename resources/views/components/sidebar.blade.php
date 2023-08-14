@props(['item', 'type' => 'posts'])

<div class="card-body bg-dark bg-opacity-10 rounded m-1">
    <h5 class="card-title text-center fs-6 fw-bold bg-dark bg-opacity-80 rounded-top  text-light m-0 p-1">{{($type == 'posts') ? $item->title : $item->name}}</h5>
    <div class="bg-dark bg-opacity-25 p-2">
        <h6 class="card-subtitle mb-2 text-muted ">Publicado a {{$item->created_at}}</h6>
        <p class="card-text">{{ $item->body }}</p>
        <a href="{{route($type.'.show', $item->id)}}" class="card-link fw-bold shadow">ler mais</a>
    </div>
</div>