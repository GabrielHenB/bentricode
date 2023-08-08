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
<div class='container'>
    <div class='row introduction-bentricode text-dark align-items-center p-3'>
        
    </div>
    <div class='row introduction-marlon text-dark align-items-center p-3'>
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
            <img class="img-fluid rounded border-3  " style="" src="marlon.jpg" alt="">
        </div>
    </div>
    <div class='row'>
        <h2 class="col-12">Bentricode: Inovação e Excelência em Soluções de Software</h2>
        <p class="col-12">

            Bem-vindo ao mundo da Bentricode, uma empresa de software
            líder em inovação e excelência na criação de soluções t
            ecnológicas sob medida. Fundada em 2019 por uma dupla de
            visionários apaixonados por tecnologia, a Bentricode
            rapidamente se tornou uma referência no setor de desenvolvimento de software.
            <br>
            Nossa equipe é composta por profissionais altamente qual
            ificados e apaixonados por transformar ideias em realida
            de digital. Com décadas de experiência combinada, somos
            especializados em diversas áreas, incluindo desenvolvim
            ento de aplicativos móveis, softwares empresariais, sis
            temas de gestão, soluções de e-commerce, inteligência a
            rtificial e muito mais.
            <br>
            Na Bentricode, a satisfação do cliente é nossa prioridad
            e número um. Estamos comprometidos em entender as necessi
            dades específicas de cada cliente e entregar soluções que
            impulsionem seus negócios de forma eficiente e inovadora.
            Nossa abordagem personalizada garante que cada projeto
            seja tratado com a devida atenção e cuidado, independent
            emente do tamanho ou complexidade.
            <br>
            Além disso, a Bentricode se orgulha de estar na vanguar
            da da tecnologia, acompanhando as últimas tendências do m
            ercado e incorporando as melhores práticas em nossos proj
            etos. Estamos sempre em busca de aprimorar nossas habilida
            des e conhecimentos para oferecer aos nossos clientes solu
            ções verdadeiramente vanguardistas.
            <br>
            Confie na Bentricode para impulsionar a sua empresa rumo
            ao sucesso tecnológico. Estamos prontos para enfrentar o
            s desafios mais ambiciosos e transformar suas ideias em
            realidade. Contate-nos hoje mesmo e descubra como a parce
            ria com a Bentricode pode elevar seus negócios a um novo patamar tecnológico.
        </p>


    </div>
</div>
@endsection

{{-- SECAO DA BARRA LATERAL DIREITA --}}

@section('sidebar')
<x-sidebar-component />
@endsection