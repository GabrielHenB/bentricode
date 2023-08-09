@props(['item'])
<div class="card p-0 border-0 " style="width: 280px; margin: 10px;">
    <img class="card-img-top" src="{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png') }}"
        alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title text-center">
            <a class="post-titulo fs-5" href="{{ route('projetos.show', $item->id) }}">
                {{ $item->name }}
            </a>
        </h5>
        <h6 class="card-subtitle muted "><span class='techs'>Utilizando {{ $item->techs }} </span></h6>
        <h6 class="card-subtitle mb-2 muted">
            <span class='criado-em'>
                Iniciou em {{ $item->start_date }}
            </span>
        </h6>
        <p class="card-text">
            {!! $item->description !!}
        </p>
        <a href="{{ route('projetos.show', $item->id) }}" class="btn btn-primary">Leia mais</a>
    </div>
</div>