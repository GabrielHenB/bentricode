@props(['item'])
<h2><a href="{{route('posts.show', $item->id)}}">{{$item->title}}</a></h2>
<span class='autor'>Por {{$item->author->name}} </span>
<span class='x-small'>Criado em {{$item->created_at->diffForHumans()}} </span>
<div> {!! $item->body !!} </div>
<!-- Componente temporario pra um card de cada post. Isso sera replicado posts foreach -->