<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Page</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="app/css/style.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <main>
    <div class="socials">
      <a href=""><img src="app/img/instagram.png" alt=""></a>
      <a href=""><img src="app/img/facebook.png" alt=""></a>
      <a href=""><img src="app/img/twitter.png" alt=""></a>
      <a href=""><img src="app/img/telegram.png" alt=""></a>
      <a href=""><img src="app/img/whatsapp.png" alt=""></a>
    </div>

    <section class="sm-card d-flex justify-content-center align-items-center container flex-column gap">
      <!-- CARD 1 -->
      <div class="card d-flex rounded">
        <div class="line"></div>

        <div class="img r">
          <img src="app/img/img3.png" alt="" class="rounded-start img-l">
        </div>
        <div class="card--info l d-flex justify-content-center align-items-left flex-column col rounded-end">
          <h3 class="h3">Como se tornar um desenvolvedor back-end? 4 dicas para começar a sua carreira</h3>
          <p>Uma das áreas que mais crescem no mundo todo é a Tecnologia da Informação. Dentre as profissões do ramo, está a de desenvolvedor back-end. Leia e descubra como se tornar um...</p>
          <a href="#" data-toggle="modal" data-target="#notice" class="read-more-button">Leia mais</a>
        </div>
      </div>
      <div class="line2"></div>

      <!-- CARD 2 -->
      <div class="card d-flex rounded">
        <div class="card--info r d-flex justify-content-center align-items-left flex-column col rounded-start">
          <h3 class="h3">Alta demanda por desenvolvedores eleva média salarial em Back-End</h3>
          <p>O levantamento revelou que, em geral, a média salarial oferecida pelas empresas/startups para Back-End juniores e pleno está acima da expectativa, exceto para cargos mais seniores, em que a oferta estimada pelos candidatos é maior...</p>
          <a href="#" data-toggle="modal" data-target="#notice2" class="read-more-button">Leia mais</a>
        </div>
        <div class="img l">
          <img src="app/img/money.png" alt="" class="rounded-end img-r">
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card d-flex rounded">
        <div class="img r">
          <img src="app/img/img2.png" alt="" class="rounded-start img-l">
        </div>
        <div class="card--info l d-flex justify-content-center align-items-left flex-column col rounded-end">
          <h3 class="h3">Mercado em alta: o que fazem os desenvolvedores de back-end e front-end</h3>
          <p>O setor de tecnologia da informação se tornou estratégico dentro das empresas que buscam inovação e rápido crescimento em um mercado tão competitivo. Não é por acaso que o segmento deve injetar R$ 845 bilhões na economia nos próximos três anos segundo a Associação Brasileira de Empresas do setor de TIC– Brasscom...</p>
          <a href="#" data-toggle="modal" data-target="#notice3" class="read-more-button">Leia mais</a>
        </div>
      </div>

    </section>

    <!-- MODAL -->
    <div class="modal fade" id="notice" tabindex="-1" role="dialog" aria-labelledby="notice">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <img src="app/img/not-1-img.png" alt="" class="rounded-start img-modal  mb-4">
            <h3 class="h3">Como se tornar um desenvolvedor back-end? 4 dicas para começar a sua carreira</h3>
            <p>
            <p>1. Lógica de programação</p>
            Antes de tudo, é necessário conhecer sobre lógica de programação e como utilizar o código para resolver problemas. Nesse sentido, recomendo estudar Python como uma primeira linguagem de programação, pois possui uma sintaxe de fácil assimilação para iniciantes.
            Assim que você se familiarizar com a sintaxe e tiver conhecimento de conceitos básicos de programação, como condições e loops, você pode começar a treinar em sites de resolução de programas como Code Wars, Code Signal, Hacker Rank e outros.
            <p>
            <p>2. Front-end</p>
            Sim, para se tornar um desenvolvedor back-end também deve-se conhecer sobre front-end.
            Isso porque back-end e front-end são interligados e interdependentes, então você precisa ter uma noção de front-end para saber qual a melhor forma de criar um sistema para interagir da melhor maneira com o back-end.</p>
            <p>
            <p>3. Banco de dados</p>
            O banco de dados é o responsável por guardar os dados de um sistema, seja para uso posterior em uma lógica de programação ou apenas para apresentar ao usuário de alguma forma. Ou seja, até mesmo para funções básicas próprias como o login, precisamos do banco de dados.
            Grande parte dos sistemas de back-end existem graças à interação com os dados, e um bom conhecimento sobre essa parte é essencial para o seu desenvolvimento como profissional.
            Os principais atualmente são os bancos SQL, sendo os mais famosos MSQL, MYSQL e PostgreSQL.</p>
            <p>
            <p>4. Uma framework para desenvolvimento web</p>Muitos problemas no desenvolvimento de sistemas de back-end já foram resolvidos em partes por frameworks, que seriam códigos utilitários disponibilizados em “bibliotecas”, que conseguem resolver diversos problemas comuns para cada tipo de desenvolvimento.
            Existem frameworks para desenvolvimento mobile, desktop, etc. Assim, temos também as frameworks web.
            Utilizar uma framework é uma forma de não ser necessário reinventar a roda e te dar mais tempo para fazer o que é mais importante, que é entregar valor ao seu cliente ou ao seu negócio.
            Ou seja, uma framework web é uma maneira que te ajuda a desenvolver mais rápido e melhor na maioria das vezes.
            Temos como exemplos: Asp Net MVC, Asp net Web Api, Laravel, Ruby on Rails, Flask e Django, cada um com suas características. E a melhor maneira de iniciar é pesquisar suas vantagens/desvantagens e escolher a sua.</p>
            </p><br>
            <p><label class="label label-default">Atualizado em:</label> 11 de julho, 2022</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="notice2" tabindex="-1" role="dialog" aria-labelledby="notice2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <img src="app/img/front-end.png" alt="" class="rounded-start img-modal  mb-4">
            <h3 class="h3">Sobe a média salaria do desenvolvedor back-end</h3>
            <p>Para vagas de Back-End juniores, as empresas oferecem uma média de R$ 4,5 mil a R$ 5,5 mil, enquanto os profissionais possuem uma expectativa de R$ 3,2 mil e R$ 3,7 mil, e para vagas de nível pleno as empresas oferecem uma faixa de R$ 6,8 mil a R$ 8,5 mil frente a uma expectativa de R$ 7 mil a 7,5 mil dos profissionais.
            </p>Considerando os profissionais sêniores, enquanto as empresas oferecem salários entre R$ 7,7 mil e R$ 10,8 mil, eles estão buscando valores entre R$ 12,1 mil e R $12,6 mil. O maior salário registrado para sênior Back-End Engineer ficou em R$ 18 mil, cuja linguagem técnica exigida para ocupar essa vaga era Java, oportunidade com maior salário. Já o menor salário para posição de desenvolvedor Java júnior é de R$ 4 mil.
            Por fim, a pesquisa elencou os motivos pelos quais os talentos não se interessaram por uma nova oportunidade na área de Back-End. 32,25% responderam estarem satisfeitos na empresa atual, enquanto 17% não estava buscando oportunidades no momento. Apenas 7% afirmaram não ter identificação com a vaga.<br>
            <p>
            <p><label class="label label-default">Atualizado em:</label> 09 de julho, 2022</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="notice3" tabindex="-1" role="dialog" aria-labelledby="notice3">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <img src="app/img/programacao.jpg" alt="" class="rounded-start img-modal  mb-4">
            <h3 class="h3">Mercado em alta: o que fazem os desenvolvedores de back-end e front-end</h3>
            <p>
              O setor de tecnologia da informação se tornou estratégico dentro das empresas que buscam inovação e rápido crescimento em um mercado tão competitivo. Não é por acaso que o segmento deve injetar R$ 845 bilhões na economia nos próximos três anos segundo a Associação Brasileira de Empresas do setor de TIC– Brasscom.

              Com a transformação digital, estes índices devem aumentar em ritmo exponencial, criando novas profissões e também oportunidades para quem escolhe seguir carreira nesta área. Há demanda e ainda faltam profissionais qualificados para preencher as muitas vagas disponíveis. E isto se reflete na busca por cursos superiores neste segmento, especialmente na área de desenvolvimento de sistemas.

              O profissional formado em Análise e Desenvolvimento de Sistemas, por exemplo, vislumbra um futuro promissor que não se resume apenas a atuação na cidade ou região onde mora. Com o trabalho remoto em home office, a contratação destes profissionais pode ser feita por empresas em qualquer lugar do país aumentando ainda mais suas oportunidades.

              Desenvolvedores em alta

              Com o mercado aquecido, algumas profissões se destacam para quem escolhe a graduação em Análise e Desenvolvimento de Sistemas. O professor Ranieri Alves dos Santos, da Faculdade Senac Criciúma enumera duas: desenvolvedor de front-end e back-end.

              As duas profissões parecem similares, mas cada uma traz suas particularidades. “O desenvolvedor back-end trabalha na codificação das camadas que ficam por trás das telas, quanto o programador front-end constrói as camadas visuais das aplicações”, explica.

              Na prática, o desenvolvedor de front-end é responsável pela codificação das interfaces dos sistemas, websites, portais e aplicativos. Este profissional domina diversas linguagens de programação, como TML, CSS, Javascript e possui habilidades em user interface (UI) e user experience (UX). Já o desenvolvedor de back-end programa as regras e funcionalidades dos sistemas e apps, conectando a interface ao banco de dados e outras aplicações.
            </p><br>
            <p><label class="label label-default">Atualizado em:</label> 09 de julho, 2022</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <div aria-busy="true" aria-label="Loading" role="progressbar" class="container">
      <div class="swing">
        <div class="swing-l"></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="swing-r"></div>
      </div>
      <div class="shadow">
        <div class="shadow-l"></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="shadow-r"></div>
      </div>
    </div>
  </main>
  <script src="anime.js"></script>
</body>

</html>