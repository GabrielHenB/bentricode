@props(['item'])
<div class="card-post-lateral">
    <h3> {{$item->title}} </h3>
    <span>Publicado a {{$item->created_at}}</span>
    <br><a href='#'>Leia mais</a>
</div>