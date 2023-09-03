@extends('components.layout')
{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}
@section('adicional')
    - Home
@endsection

{{-- SECAO DO HOME EM SI EXTERNO AO CONTAINER EM LAYOUT --}}
@section('home')
    <x-carrousel />

    <div class="bg-light">
        <div class="container-fluid bg-light">
            <div class='row introduction-bentricode text-dark align-items-center p-3'>

            </div>
            <div class='row text-bg-light'>
                <h2 class="col-12 text-center">Bentricode: Inovação e Excelência em Soluções de Software</h2>
                <p class="col-12">

                <p>Bem-vindo ao mundo da Bentricode, uma empresa de software
                    líder em inovação e excelência na criação de soluções
                    tecnológicas sob medida. Fundada em 2019 por uma dupla de
                    visionários apaixonados por tecnologia, a Bentricode
                    rapidamente se tornou uma referência no setor de desenvolvimento de software.</p>
                <br>
                <p>Nossa equipe é composta por profissionais altamente qual
                    ificados e apaixonados por transformar ideias em realida
                    de digital. Com décadas de experiência combinada, somos
                    especializados em diversas áreas, incluindo desenvolvim
                    ento de aplicativos móveis, softwares empresariais, sis
                    temas de gestão, soluções de e-commerce, inteligência artificial
                    e muito mais.</p>
                <br>
                <p>Na Bentricode, a satisfação do cliente é nossa prioridade
                    número um. Estamos comprometidos em entender as necessidades
                    específicas de cada cliente e entregar soluções que
                    impulsionem seus negócios de forma eficiente e inovadora.
                    Nossa abordagem personalizada garante que cada projeto
                    seja tratado com a devida atenção e cuidado, independentemente
                    do tamanho ou complexidade.</p>
                <br>
                <p>Além disso, a Bentricode se orgulha de estar na vanguar
                    da da tecnologia, acompanhando as últimas tendências do m
                    ercado e incorporando as melhores práticas em nossos proj
                    etos. Estamos sempre em busca de aprimorar nossas habilida
                    des e conhecimentos para oferecer aos nossos clientes soluções
                    verdadeiramente vanguardistas.</p>
                <br>
                <p>Confie na Bentricode para impulsionar a sua empresa rumo
                    ao sucesso tecnológico. Estamos prontos para enfrentar os
                    desafios mais ambiciosos e transformar suas ideias em
                    realidade. Contate-nos hoje mesmo e descubra como a parceria
                    com a Bentricode pode elevar seus negócios a um novo patamar tecnológico.</p>
                </p>


            </div>
            <div class="row text-bg-light text-center">
                <div class="col-12">
                    <h1> > Nossos Serviços</h1>
                </div>
                <div class="col m-2">
                    <div class="col-12 fs-4 fw-bold">web</div>
                    <div class="col-12"><i class="bi bi-braces"></i></div>
                    <div class="col-12">Desenvolvimento de front-end e back-end para plataformas web</div>
                </div>
                <div class="col m-2">
                    <div class="col-12 fs-4 fw-bold">mobile</div>
                    <div class="col-12"><i class="bi bi-android"></i></div>
                    <div class="col-12">Aplicativos mobile para Android e interfaces</div>
                </div>
                <div class="col m-2">
                    <div class="col-12 fs-4 fw-bold">iot</div>
                    <div class="col-12"><i class="bi bi-router"></i></div>
                    <div class="col-12">Soluções IoT diversas</div>
                </div>
                <div class="col m-2">
                    <div class="col-12 fs-4 fw-bold">ui/ux</div>
                    <div class="col-12"><i class="bi bi-window-fullscreen"></i></div>
                    <div class="col-12">Design de interfaces UI/UX para serviços</div>
                </div>
            </div>
            <div class="row text-bg-light text-center">
                <div class="col-12">
                    <h1>> Redes sociais</h1>
                </div>
                <a href="#" class="col m-2 btn btn-info text-light fs-4 fw-bold ">
                    <div class="row">
                        <i class="col-12 col-md-1 bi bi-facebook"></i>
                        <span class="col-12 col-md">Facebook</span>
                    </div>

                </a>
                <a href="#" class="col m-2 btn btn-danger text-light fs-4 fw-bold">
                    <div class="row">
                        <i class="col-12 col-md-1 bi bi-instagram "></i>
                        <span class="col-12 col-md ">Instagram</span>
                    </div>


                </a>
                <a href="#" class="col m-2 btn btn-success text-light fs-4 fw-bold">
                    <div class="row">
                        <i class="col-12 col-md-1 bi bi-whatsapp"></i>
                        <span class="col-12 col-md">Whatsapp</span>
                    </div>

                </a>

            </div>
        </div>

    </div>


    <div class="container-fluid">
        
        <div class='row introduction-marlon gap-3 text-dark align-items-center p-3 '>
            <h1 class="display-4 text-center">Devs:</h1>
            <div class="col-md col-12 bg-dark rounded bg-opacity-25 p-3">
                <div class="d-flex justify-content-center">
                    <div class="containerImagemBio">
                        <img class="" style="" src="{{ asset('marlon.jpg') }}"
                        alt="Avatar Marlon">
                    </div>
                  
                </div>
                <div class="text-center">

                    <blockquote class="blockquote  ">
                        <p class="display-6">Márlon Bento Azevedo</p>
                        <footer class="blockquote-footer ">Habilidades: <cite title="Título da fonte">Front-end, Back-End,
                                API</cite></footer>
                    </blockquote>
                    <p class="text-muted">
                        Estudante de Engenharia de Computação com habilidades em front-end e back-end, atualmente a procura
                        de
                        estágio na area de Desenvolvimento Web
                    </p>
                    <h2 class="fs-5">Habilidades:</h2>
                    <ul class="text-muted list-unstyled">
                        <li>HTML, CSS, JavaScript / Avançado</li>
                        <li>Bootstrap 5 / Intermediário</li>
                        <li>Java com Spring</li>
                        <li>PHP/MySql</li>
                        <li>Designer / Básico</li>
                    </ul>
    
                </div>

            </div>
            <div class="col-md col-12 bg-dark rounded bg-opacity-25 p-3">
                <div class=" d-flex justify-content-center">
                    <div class="containerImagemBio">
                        <img class=""  style="" src="{{ asset('ga2.jpg') }}"
                        alt="Avatar Gabriel">
                    </div>
                   
                </div>
                <div class=" text-center">
                    <blockquote class="blockquote  ">
                        <p class="display-6">Gabriel Henrique Braz</p>
                        <footer class="blockquote-footer ">Quem é ele? <cite title="Título da fonte">Desenvolvedor</cite>
                        </footer>
                    </blockquote>
                    <p class="text-muted">
                        Sou um estudante de engenharia de computação, tenho
                        conhecimentos em web full-stack mas foco em back-end, além disso, também me interesso por
                        cybersegurança
                        e redes de computadores.
                    </p>
                    <h2 class="fs-5">Habilidades:</h2>
                    <ul class="text-muted list-unstyled">
                        <li>PHP \ Java</li>
                        <li>HTML, CSS, JavaScript</li>
                        <li>Bootstrap 5 </li>
                        <li>Frameworks: Laravel \ Vue JS</li>
                        <li>Data: MySQL (MariaDB)</li>
                    </ul>
    
                </div>
                

    
            </div>
            
        </div>

        <div class='row introduction-marlon text-dark align-items-center p-3'>
            

        </div>
    </div>
@endsection


{{-- SECAO DO CONTEUDO --}}

@section('content')
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
    <!-- Nenhuma -->
@endsection
