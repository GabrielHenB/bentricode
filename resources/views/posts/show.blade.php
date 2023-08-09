@extends('components.layout')

{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}

@section('adicional')
    - Bentricode - {{ $item->title }}
@endsection

{{-- SECAO DO CONTEUDO --}}

@section('content')
    <div class="col-lg-9 col-md-12  p-4 text-bg-light">
        <article>
            <!-- Post header-->
            <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1">{{ $item->title }}</h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2"> Post: {{ $item->created_at->diffForHumans() }} by <cite
                        title="Título da fonte">{{ $item->author->name }}</cite></div>
                <div class="">
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                </div>

                <!-- colocar somente imagens de 900x400 pixel-->
                <div class="row mb-2">
                    <div class="image-container">
                        <img class="rounded"
                            src="{{ $item->thumburl != '#' ? asset($item->thumburl) : asset('placeholder.png') }}"
                            alt="..." />
                    </div>
                </div>


                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{!! $item->body !!}</p>
                    <h2 class="fw-bolder mb-4 mt-5">Todos os posts são de autoria da BentriCode</h2>
                    <p class="fs-5 mb-4">Caso queira utilizar alguma tecnologia Favor entrar em contato para parcerias ou
                        para pedir permissão de uso.</p>
                </section>
        </article>
        <section class="mb-5">
            <div class="card bg-light">
                <div class="card-body">
                    <!-- Comment form-->
                    <form class="mb-4">
                        <textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                    </form>
                    <!-- Comment with nested comments-->
                    <div class="d-flex mb-4">
                        <!-- Parent comment-->
                        <div class="flex-shrink-0"><img class="rounded-circle"
                                src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                            <div class="fw-bold">Commenter Name</div>
                            If you're going to lead a space frontier, it has to be government; it'll never be private
                            enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified
                            risks.
                            <!-- Child comment 1-->
                            <div class="d-flex mt-4">
                                <div class="flex-shrink-0"><img class="rounded-circle"
                                        src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    And under those conditions, you cannot establish a capital-market evaluation of that
                                    enterprise. You can't get investors.
                                </div>
                            </div>
                            <!-- Child comment 2-->
                            <div class="d-flex mt-4">
                                <div class="flex-shrink-0"><img class="rounded-circle"
                                        src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    When you put money directly to a problem, it makes a good headline.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single comment-->
                    <div class="d-flex">
                        <div class="flex-shrink-0"><img class="rounded-circle"
                                src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                            <div class="fw-bold">Commenter Name</div>
                            When I look at the universe and all the ways the universe wants to kill us, I find it hard to
                            reconcile that with statements of beneficence.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
    <x-sidebar-component />
@endsection
