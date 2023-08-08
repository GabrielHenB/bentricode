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
    }
}
