@props(['items'])
<div class='container lateral'>
    <section class="posts-recentes">
        @foreach($items as $item)
        <x-sidebar :item="$item" />
        @endforeach
    </section>
    <section class="produtos-lateral">
        <div class="card-post-lateral">
            <h3>Titulo do Produto</h3>
            <span>Publicado a 2 minutos atras</span>
            <br><a href='#'>Leia mais</a>
        </div>
        <div class="card-post-lateral">
            <h3>Titulo do Produto</h3>
            <span>Publicado a 2 minutos atras</span>
            <br><a href='#'>Leia mais</a>
        </div>
    </section>
    <!-- TODO barrinha lateral -->
</div>