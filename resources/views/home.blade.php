@extends('components.layout')
{{-- SECAO DO TITULO DA PAGINA ISSO APARECE NO NAVEGADOR --}}
@section('adicional')
- Home

@endsection
@section('carrosel')
<x-carrousel />
@endsection
{{-- SECAO DO CONTEUDO --}}

@section('content')
<div class='col-lg-12 col-md-12 conteudo'>
<div class='container'>
    <div class='row introduction-bentricode text-dark align-items-center p-3'>
        
    </div>
    <div class='row text-bg-light'>
        <h2 class="col-12 text-center">Bentricode: Inovação e Excelência em Soluções de Software</h2>
        <p class="col-12">

            <p>Bem-vindo ao mundo da Bentricode, uma empresa de software
            líder em inovação e excelência na criação de soluções t
            ecnológicas sob medida. Fundada em 2019 por uma dupla de
            visionários apaixonados por tecnologia, a Bentricode
            rapidamente se tornou uma referência no setor de desenvolvimento de software.</p>
            <br>
            <p>Nossa equipe é composta por profissionais altamente qual
            ificados e apaixonados por transformar ideias em realida
            de digital. Com décadas de experiência combinada, somos
            especializados em diversas áreas, incluindo desenvolvim
            ento de aplicativos móveis, softwares empresariais, sis
            temas de gestão, soluções de e-commerce, inteligência a
            rtificial e muito mais.</p>
            <br>
            <p>Na Bentricode, a satisfação do cliente é nossa prioridad
            e número um. Estamos comprometidos em entender as necessi
            dades específicas de cada cliente e entregar soluções que
            impulsionem seus negócios de forma eficiente e inovadora.
            Nossa abordagem personalizada garante que cada projeto
            seja tratado com a devida atenção e cuidado, independent
            emente do tamanho ou complexidade.</p>
            <br>
            <p>Além disso, a Bentricode se orgulha de estar na vanguar
            da da tecnologia, acompanhando as últimas tendências do m
            ercado e incorporando as melhores práticas em nossos proj
            etos. Estamos sempre em busca de aprimorar nossas habilida
            des e conhecimentos para oferecer aos nossos clientes solu
            ções verdadeiramente vanguardistas.</p>
            <br>
            <p>Confie na Bentricode para impulsionar a sua empresa rumo
            ao sucesso tecnológico. Estamos prontos para enfrentar o
            s desafios mais ambiciosos e transformar suas ideias em
            realidade. Contate-nos hoje mesmo e descubra como a parce
            ria com a Bentricode pode elevar seus negócios a um novo patamar tecnológico.</p>
        </p>


    </div>
    <div class="row text-bg-light text-center">
        <div class="col-12">
            <h1>Redes sociais:</h1>
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
    <div class='row introduction-marlon text-dark align-items-center p-3  border-bottom border-dark border-3 border-opacity-50'>
        <div class="col-12 col-md-8">
            <blockquote class="blockquote  ">
                <p class="display-6">Márlon Bento Azevedo</p>
                <footer class="blockquote-footer ">Habilidades:  <cite
                        title="Título da fonte">Front-end, Back-End, API</cite></footer>
            </blockquote>
            <p class="text-muted">
                Estudante de Engenharia de Computação com habilidades em front-end e back-end, atualmente a procura de estágio na area de Desenvolvimento Web
            </p>
            <h2 class="fs-5">Habilidades:</h2>
            <ul class="text-muted">
                <li>HTML, CSS, JavaScript / Avançado</li>
                <li>Bootstrap 5 / Intermediário</li>
                <li>Java com Spring</li>
                <li>PHP/MySql</li>
                <li>Designer / Básico</li>
            </ul>

        </div>
        <div class="col-12 col-md-4">
            <img class="img-fluid rounded border-3  shadow" style="" src="{{asset('marlon.jpg')}}" alt="">
        </div>
    </div>

    <div class='row introduction-marlon text-dark align-items-center p-3'>
        <div class="col-12 col-md-8">
            <blockquote class="blockquote  ">
                <p class="display-6">Gabriel Henrique Braz</p>
                <footer class="blockquote-footer ">Quem é ele?  <cite
                        title="Título da fonte">Desenvolvedor Fullstack (será?)</cite></footer>
            </blockquote>
            <p class="text-muted">
                Não sei o que colocar aqui {{-- Sério --}}
            </p>
            <h2 class="fs-5">Habilidades:</h2>
            <ul class="text-muted">
                <li>HTML, CSS, JavaScript / Intermediario</li>
                <li>Bootstrap 5 / Basico</li>
                <li>Programação: PHP e Java</li>
                <li>Framework: Laravel</li>
                <li>BD: MySQL (MariaDB)</li>
                <li>Sim eu ja programei  em VHDL</li>
            </ul>

        </div>
        <div class="col-12 col-md-4">
            <img class="img-fluid rounded border-3  shadow" style="" src="{{asset('ga.jpg')}}" alt="Something Useless">
        </div>
    </div>
</div>
</div>
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
<!-- Nenhuma -->
@endsection