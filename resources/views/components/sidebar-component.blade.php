@props(['posts','projs'])
<div class='col-3 d-none d-md-none d-sm-none d-lg-block lateral'>
        
    <div class='container lateral border-start border-black border-2 '>
      <section class="posts-recentes p-1">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
          <div class="card-header">Mais vistos</div>
            <div class='container lateral'>
                <section class="posts-recentes">
                    @foreach($posts as $item)
                    <x-sidebar :item="$item" />
                    @endforeach
                </section>
                <section class="produtos-lateral">
                    @foreach($projs as $item)
                    <x-sidebar :item="$item" type="projetos" />
                    @endforeach
                </section>
                <!-- TODO barrinha lateral -->
            </div>
        </div>
    </section>
  </div>
</div>