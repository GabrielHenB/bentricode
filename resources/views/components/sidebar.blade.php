@props(['item'])
<div class='container lateral border-start border-black border-2'>
    <section class="posts-recentes p-1"> 
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Mais visto</div>
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Publicado a {{$item->created_at}}</h6>
                <p class="card-text">{{ $item->body }}</p>
                <a href="#" class="card-link">ler mais</a>
            </div>
        </div>
    </section>
</div>