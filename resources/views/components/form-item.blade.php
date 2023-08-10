@props(['name','type' => 'text','tamanho' => '' ,'placeholder' => ''])

<div class="form-group">
    <label for="input{{$name}}">{{($type == 'file') ? "Thumbnail" : ucwords($name)}}:</label>
    @unless($type == 'textarea')
        <input type="{{$type}}"
        name="{{$name}}"
        {{$attributes->merge(['class' => ($type == 'file') ? 'form-control-file' : 'form-control '.$tamanho])}}
        id="input{{$name}}"
        aria-describedby="{{$type}}Help" placeholder="{{$placeholder}}"
        { {$attributes }} {{-- O $attributes sao quaisquer atributos passados para o componente Blade --}}
        >
        @if($type == 'email')
            <small id="emailHelp" class="form-text text-muted">
                Nunca vamos compartilhar seu e-mail com terceiros...
            </small>
        @endif
    @else
        <textarea class="form-control" name="{{$name}}" id="FormControl{{$name}}" {{$attributes->merge(['rows' => $tamanho])}}></textarea>
        <small class="form-text text-muted">
            Este campo aceita tags HTML
        </small>
    @endunless
    <!-- Caso ocorram erros eles serão exibidos aqui -->
    @error($name)
    <p class="text-red-500 text-xs mt-1" style="color: red; font-size: x-small;">{{$message}}</p>
    @enderror
</div>