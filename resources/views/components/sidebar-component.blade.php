@props(['items'])
<div class='col-3 d-none d-md-none d-sm-none d-lg-block lateral'>
        
    <div class='container lateral border-start border-black border-2 '>
      <section class="posts-recentes p-1">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
          <div class="card-header">Mais vistos</div>
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
        </div>
    </section>
  </div>
</div>