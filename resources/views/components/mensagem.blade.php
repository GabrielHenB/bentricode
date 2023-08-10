@if(session()->has('mensagem'))
    {{-- Se existir uma Mensagem Flash na sessao --}}
    <div class="alert alert-danger flash-message" id='mensagem-flash' role="alert">
        <p>
            {{session('mensagem')}}
        </p>
        <button type="button" class="close" id="fechar" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif