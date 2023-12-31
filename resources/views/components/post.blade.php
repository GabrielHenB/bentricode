@props(['item'])
{{--
<h2>
    <a class="p-2 m-2 post-titulo" href="{{route('posts.show', $item->id)}}">{{$item->title}}</a>
</h2>
<span class='autor'>Por {{$item->author->name}} </span>
<span class='x-small'>Criado em {{$item->created_at->diffForHumans()}} </span>
<div class="post-corpo m-2"> {!! $item->body !!} </div>
--}}
<div class="col">
    <div class="card p-0 h-100" style="">
        <div class="card-header text-bg-dark text-center">
            <h5 class="card-title ">
                <a class="post-titulo fs-5 text-bg-dark text-decoration-none" href="{{ route('posts.show', $item->id) }}">
                    {{ $item->title }}
                </a>
            </h5>
        </div>
        <img class="card-img-top rounded-0 "
            style=""src="{{ $item->thumburl != '#' ? asset('storage/'. Str::after($item->thumburl,'public/')) : asset('placeholder.png') }}"
            alt="Card image cap">
        <div class="card-body">
            <h6 class="card-subtitle muted "><span class='autor'>Por {{ $item->author->name }} </span></h6>
            <h6 class="card-subtitle mb-2 muted">
                <span class='criado-em'>
                    Há {{ $item->created_at->locale('pt')->diffForHumans() }}
                </span>
            </h6>
            <p class="card-text">
                {{ $item->body }}
            </p>


        </div>

        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <a href="{{ route('posts.show', $item->id) }}" class="btn btn-primary">Leia mais</a>
            </div>
        </div>
    </div>
</div>


<!-- Componente temporario pra um card de cada post. Isso sera replicado posts foreach -->
