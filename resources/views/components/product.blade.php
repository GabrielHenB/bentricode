@props(['item'])
<div class="col">
    <div class="card p-0 h-100" style="">
        <div class="card-header text-bg-dark text-center">
            <h5 class="card-title text-center ">
                <a class="post-titulo fs-5 text-bg-dark text-decoration-none" href="{{ route('projetos.show', $item->id) }}">
                    {{ $item->name }}
                </a>
            </h5>
        </div>
        <img class="card-img-top rounded-0 "
            style=""src="{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png') }}"
            alt="Card image cap">
        <div class="card-body">
            <h6 class="card-subtitle muted "><span class='techs'>Utilizando {{ $item->techs }} </span></h6>
            <h6 class="card-subtitle mb-2 muted">
                <span class='criado-em'>
                    Iniciou em {{ $item->start_date }}
                </span>
            </h6>
            <p class="card-text">
                {!! $item->description !!}
            </p>


        </div>

        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <a href="{{ route('projetos.show', $item->id) }}" class="btn btn-primary">Leia mais</a>
            </div>
        </div>
    </div>
</div>