<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        \App\Models\User::factory()->create(['name'=>'Gabriel']);
        \App\Models\User::factory()->create(['name'=>'Marlon']);
        \App\Models\User::factory(2)->create();
        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'Nova horta autonoma BentriPlanta',
            'body' => "
            É lançado a nova <strong>Horta Automatica</strong> da Bentricode,
             um modelo único que garante a melhor qualidade para as suas plantas. Graças ao sistema
             de monitoramento em tempo real da temperatura e sensores <strong>de ponta</strong>, sua
             horta terá um incrível aumento em produtividade e, claro, qualidade.
            ",
            'thumburl' => 'pl1.jpg',
        ]);
        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'Por quê VHDL não é programação e sim descrição',
            'body' => "É argumentável que VHDL seja programação, mas se você realmente é um adepto do dao
            da descrição, jamais cometeria o equivoco, grave, de chamar VHDL de programação. Não é programação
            é descrição de hardware, não se está programando e sim descrevendo. Não seja burro!!",
            'thumburl' => 'pl2.jpeg'
        ]);
        \App\Models\Post::create([
            'user_id' => '2',
            'title' => 'Sempre podemos melhorar as coisas',
            'body' => "Já pensou em como melhorar as coisas hoje? Sabia que sempre podemos melhorar as coisas?
            Existem coisas a serem melhoradas e essas coisas são sempre passiveis de melhorias. Então
            lembrem-se, sempre podemos melhorar as coisas.",
            'thumburl' => 'pl3.gif'
        ]);
        \App\Models\Post::create([
            'user_id' => '2',
            'title' => 'Top 10 motivos para programar em Julia',
            'body' => "
                1. **Desempenho excepcional**: Julia oferece velocidade comparável a
                linguagens de baixo nível, como C e Fortran, sendo ideal para cálculos complexos.
                2. **Facilidade de aprendizado**: Com sintaxe amigável e expressiva, é acessível 
                a programadores de todos
                os níveis, agilizando o processo de aprendizagem.
                3. **Ecossistema robusto**: Contando com uma comunidade ativa e diversos pacotes, Julia 
                é versátil
                em diferentes áreas.
                4. **Suporte a paralelismo**: A programação paralela e distribuída possibilita a otimiza
                ção de
                cálculos em múltiplos núcleos e clusters.
                5. **Interoperabilidade**: Integrar código de outras linguagens, como Python e R, é fácil
                e eficiente.
                6. **Visualização de dados**: Julia oferece ferramentas avançadas para criação de gráficos 
                e representações visuais.
                7. **Documentação rica**: A comunidade fornece uma documentação clara e completa para
                 auxiliar
                no desenvolvimento.
                8. **Open-source**: Sendo uma linguagem de código aberto, é acessível a todos e permi
                te contribuições.
                9. **Análise estatística**: Pacotes dedicados a estatísticas e aprendizado de máquin
                a garantem soluções precisas para análise de dados.
                10. **Adoção em instituições de pesquisa**: A crescente popularidade em instituições
                acadêmicas assegura seu constante desenvolvimento e relevância.
            ",
            'thumburl' => 'pl4.jpeg'
        ]);
        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'O incrivel mundo da programação em C',
            'body' => "Nada como uma bela programação em C. Você só sabe que foi feliz quando percebe a
            tristeza e depressão de ficar 7 dias tentando resolver um erro em C que a IDE não sabe te avisar
            o por que!",
            'thumburl' => 'pl5.jpg'
        ]);
        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'Top 4 produtos da BentriCode',
            'body' => "Aqui vai uma lista dos 4 melhores produtos da BentriCode: 
            - BentriPlanta: A melhor horta autonoma com reservatorio funcional
            - Bentricionário: Uma solução de dicionário em Java
            - Arquivo Mestre: Sempre precisamos mexer com arquivos, mas nunca estamos a fim de implementar,
            o arquivo mestre bentricode resolve seus problemas
            - Megshop: A melhor loja da regiao!",
            'thumburl' => 'pl6.jpg'
        ]);
        \App\Models\Post::create([
            'user_id' => '2',
            'title' => 'Um artigo curto sobre numeros primos',
            'body' => "Durante grande parte da minha experiencia em exatas, sempre fui fascinado pelos numeros
            primos e como não existe um metodo definitivo para encontrar qualquer primo. Acredito que todos
            um dia quisemos encontrar um numero primo, mas nao sabiamos como.",
            'thumburl' => 'pl7.jpg'
        ]);
        \App\Models\Post::create([
            'user_id' => '2',
            'title' => 'O ninja do C#: Um canal de programação',
            'body' => "Já teve vontade de aprender programação com um conteúdo prático e acessível?
            Acesse o canal Ninja do C# no youtube.",
            'thumburl' => 'pl8.jpg'
        ]);
        //\App\Models\Post::factory(2)->create();
        \App\Models\Produto::create([
            "name" => "Horta Automática com Reservatório",
            "thumburl" => "#",
            "is_completo" => "1",
            "description" => "Horta inteligente desenvolvida usando ESP-32, FreeRT OS e MQTT",
            "techs" => "C, C++, Python, ESP-32, FreeRTOS, MQTT",
            "start_date" => "2022-08-02",
            "body" => "
            <p>Desenvolvemos uma Horta Automática e Inteligente que, graças a um suporte IoT era capaz
            de informar ao cliente valores importantes, como, Umidade e Temperatura, através de um
            aplicativo.</p>
            <p>Além disso, graças ao uso do sistema operacional FreeRTOS em tempo real, nosso sistema
            monitorava e automaticamente irrigava as plantas, quando os sensores observavam necessidade.
            </p>
            <h5>Demonstração: </h5>
            <iframe width='560' 
            height='315' 
            src='https://www.youtube.com/embed/6hr0V0Caaqs' title='YouTube video player' 
            frameborder='0' 
            allow='accelerometer; 
            autoplay; clipboard-write; 
            encrypted-media; gyroscope; 
            picture-in-picture; web-share'
             allowfullscreen></iframe>
            ",
        ]);
        \App\Models\Produto::create([
            "name" => "Microprocessador PUC-222",
            "thumburl" => "#",
            "is_completo" => "1",
            "description" => "Descrição de um microprocessador em VHDL",
            "techs" => "VHDL, Assembly",
            "start_date" => "2022-10-22",
            "body" => "
            <p>É um projeto de um microprocessador em VHDL</p>
            <h5>Demonstração: </h5> 
            Sem demonstração no momento.
            ",
        ]);
        \App\Models\Produto::create([
            "name" => "Portal de Filmes Nazarick Movies",
            "thumburl" => "proj1.PNG",
            "is_completo" => "1",
            "description" => "Websites de um portal de filmes de animação com acesso a API do themoviedb",
            "techs" => "Javascript, HTML, CSS, Bootstrap, jQuery",
            "start_date" => "2020-08-02",
            "body" => "
            <p>Desenvolvido por Gabriel, o projeto de um portal de filmes de animação, que lista filmes
            obtidos da API do themoviedb</p>
            <h5>Demonstração: </h5> 
            <a href='https://sitediwt2.undefmoonface.repl.co/' style='text-decoration: none'>
            Teste o Website Aqui
            </a>
            ",
        ]);
        \App\Models\Produto::create([
            "name" => "API REST em SpringBoot para Transportadora",
            "thumburl" => "projspring.jpeg",
            "is_completo" => "1",
            "description" => "Uma API REST desenvolvida com a framework Springboot em Java!",
            "techs" => "Java, Spring, Springboot",
            "start_date" => "2022-11-10",
            "body" => "
            <p>Desenvolvida por Márlon Bento, a API RESTful foi escrita com uso da framework SpringBoot
             do ecossistema Spring</p>
            <p>O sistema analisava o custo de uma transportadora aplicado à rodovias,
             com base em serem pavimentadas ou não</p>
             <p>Conta com:
             <ul>
               <li>Token de Autenticação</li>
               <li>Sistema de login</li>
               <li>Envio de E-mails</li>
               <li>Gerência de Contas</li>
               <li>Análise de Custo</li>
               <li>Sistema de Log</li>
             </ul>
           </p>
            <h5><a href='https://github.com/marlon-bento/api-rest-springboot'>Repositório</a></h5> 
            ",
        ]);
        \App\Models\Produto::create([
            "name" => "Portal de Filmes Bentomovies",
            "thumburl" => "proj2.jpeg",
            "is_completo" => "1",
            "description" => "Website de um portal de filmes de animação com acesso a API do themoviedb",
            "techs" => "Javascript, HTML, CSS, Bootstrap, jQuery",
            "start_date" => "2020-08-02",
            "body" => "
            <p>Desenvolvido por Márlon Bento, é um portal de filmes, que lista filmes
            obtidos da API do themoviedb</p>
            <h5>Demonstração: </h5>
            <a href='https://github.com/marlon-bento/portal-de-filmes' style='text-decoration: none'> 
            Repositório
            </a>
            ",
        ]);
        \App\Models\Produto::create([
            "name" => "Bentrilist",
            "thumburl" => "projbentrilist.PNG",
            "is_completo" => "0",
            "description" => "Website de listagem de capítulos de qualquer coisa",
            "techs" => "PHP, Javascript, HTML, CSS, Alpine.js",
            "start_date" => "2023-01-01",
            "body" => "
            <p>É um website para listar seus capítulos de livros, mangás ou episódios de qualquer coisa!</p>
            <p>Conta com:
              <ul>
                <li>Comentarios e reviews de cada item</li>
                <li>Sistema de login para postar</li>
                <li>Divisão em Categorias</li>
                <li>Sistema de pesquisa que incorpora categorias</li>
              </ul>
            </p>
            <h5><a href='https://github.com/GabrielHenB/bentrilist'>Repositório</a> </h5> 
            ",
        ]);
        \App\Models\Produto::create([
            "name" => "Labirinto C#",
            "thumburl" => "#",
            "is_completo" => "1",
            "description" => "Jogo de labirinto desenvolvido em C# para praticar programação",
            "techs" => "C#",
            "start_date" => "2019-03-10",
            "body" => "
            <p>Joguinho de resolver um labirinto, desenvolvido como parte de uma disciplina na faculdade.</p>
            <h5><a href='https://github.com/GabrielHenB/csharp-labyrinth-code-test'>Repositório</a> </h5> 
            ",
        ]);
        \App\Models\Produto::create([
            "name" => "Arquivo Mestre",
            "thumburl" => "#",
            "is_completo" => "1",
            "description" => "Um poderoso código para manipulação de arquivos",
            "techs" => "Java",
            "start_date" => "2020-08-10",
            "body" => "
            <p>O Arquivo Mestre é um código para manipulação de arquivos, inicialmente em Java, parte
            de um projeto de Hash Extensível.</p>
            <h5><a href='https://github.com/marlon-bento/tabela-hash-extensivel'>Repositório</a> </h5> 
            ",
        ]);
        
    }
}
