@props(['item'])
{{--
<h2>
    <a class="p-2 m-2 post-titulo" href="{{route('posts.show', $item->id)}}">{{$item->title}}</a>
</h2>
<span class='autor'>Por {{$item->author->name}} </span>
<span class='x-small'>Criado em {{$item->created_at->diffForHumans()}} </span>
<div class="post-corpo m-2"> {!! $item->body !!} </div>
--}}

<div class="card p-0 border-0" style="width: 280px; margin: 10px;">
  <div>
    <img class="card-img-top" src="{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">
        <a class="post-titulo fs-5" href="{{route('posts.show', $item->id)}}">
          {{$item->title}}
        </a>
      </h5>
      <h6 class="card-subtitle muted "><span class='autor'>Por {{$item->author->name}} </span></h6>
      <h6 class="card-subtitle mb-2 muted">
        <span class='criado-em'>
          Há {{$item->created_at->diffForHumans()}}
        </span>
      </h6>
      <p class="card-text">
        {!! $item->body !!}
      </p>
      <a href="{{route('posts.show', $item->id)}}" class="btn btn-primary">Leia mais</a>
    </div>
  </div>

</div>

<!-- Componente temporario pra um card de cada post. Isso sera replicado posts foreach -->