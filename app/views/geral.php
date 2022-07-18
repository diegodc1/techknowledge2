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

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
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
          <img src="app/img/5g.png" alt="" class="rounded-start img-l">
        </div>
        <div class="card--info l d-flex justify-content-center align-items-left flex-column col rounded-end">
          <h3 class="h3">Infraestrutura Inteligente</h3>
          <p>Países pioneiros em 5G estão experimentando impactos diretamente sobre a evolução de promessas como as tecnologias edge computing e IoT. A ampliação da conectividade está diretamente relacionada a possibilidades de digitalização na indústria e na saúde, por exemplo, que requerem disponibilidade e capacidade de rede, bem como velocidade e baixa latência...</p>
          <a href="#" data-toggle="modal" data-target="#notice" class="read-more-button">Leia mais</a>
        </div>
      </div>
      <div class="line2"></div>

      <!-- CARD 2 -->
      <div class="card d-flex rounded">
        <div class="card--info r d-flex justify-content-center align-items-left flex-column col rounded-start">
          <h3 class="h3">As inovações tecnológicas da Quarta Revolução Industrial</h3>
          <p>Os avanços tecnológicos no começo do século 21 tem suscitado questionamentos e preocupações, sobre os impactos da chamada quarta revolução industrial, tendo em vista a velocidade como as mudanças estão acontecendo...</p>
          <a href="#" data-toggle="modal" data-target="#notice2" class="read-more-button">Leia mais</a>
        </div>
        <div class="img l">
          <img src="app/img/img4.png" alt="" class="rounded-end img-r">
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card d-flex rounded">
        <div class="img r">
          <img src="app/img/web3.0.png" alt="" class="rounded-start img-l">
        </div>
        <div class="card--info l d-flex justify-content-center align-items-left flex-column col rounded-end">
          <h3 class="h3">As inovaçõesa e riscos da internet do futuro (Web 3.0)</h3>
          <p>Ecossistema favorece negócios sem intermediários, mas abre brecha perigosa para enganações. A Web 3.0 é a nova tendência mundial que afetará o modo como as pessoas se relacionam com a internet, bem como o impacto disso na sociedade moderna. Em um mundo regido pela conexão em tempo integral, a evolução da rede mundial de computadores é fator crucial para compreensão de como a tecnologia transformará as relações humanas...</p>
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
            <img src="app/img/5g.png" alt="" class="rounded-start img-modal  mb-4">
            <h3 class="h3">Infraestrutura Inteligente</h3>

            <p>Suas implicações vão desde a criação de novos serviços e modelos de negócio até a oferta de uma experiência personalizada para clientes, mas também para os profissionais.

              Até o final de 2022, o Brasil espera ter todas as capitais com 5G disponível. A ampliação da cobertura será um desafio comum para todos os países, mas com contornos mais dramáticos para um país de extensão continental e tantas diferentes densidades populacionais como o Brasil. Para a cobertura ser boa, a quantidade de antenas é bem maior que a do 4G.

              Com isso, a ampliação da cobertura deve ser lenta. Segundo estimativas, enquanto no fim de 2021 cerca de 25% da população mundial já tinha acesso ao 5G em algum nível, em 2025 essa porcentagem saltará para 50% da população. Esse volume, no entanto, estará concentrado em países desenvolvidos e nos centros urbanos.
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
            <img src="app/img/img4.png" alt="" class="rounded-start img-modal  mb-4">
            <h3 class="h3">As inovações tecnológicas da Quarta Revolução Industrial</h3>

            <p>Ninguém sabe ainda como os efeitos da quarta revolução industrial afetará as pessoas mais pobres, principalmente na questão do trabalho, pois nem todos terão condições de investimentos em equipamentos e tecnologias para a prestação de serviços, e nem todos estarão incluídos nos postos de trabalho, muitos dos quais se tornarão obsoletos ou até mesmo podem desaparecer. E ressalta que “este é apenas um dos impactos desta revolução tecnológica, que não se define por cada uma destas tecnologias isoladamente, mas pela convergência e sinergia entre elas.
              Há uma variedade de áreas em que estão sendo feitos investimentos nas inovações tecnológicas, como explica Silvia Ribeiro: “Nomeiam entre as 10 tecnologias chaves – e mais disruptivas – a engenharia de sistemas metabólicos para produzir substâncias industriais (leia-se biologia sintética para substituir combustíveis, plásticos, fragrâncias, saborizantes, princípios ativos farmacêuticos derivados de conhecimento indígena); a internet das nanocoisas (além de usar a internet para a produção industrial, agrícola, etc., também nanossensores inseridos em seres vivos, inclusive em nossos corpos, para captar e receber estímulos e a administração de drogas e farmacêuticos); ecossistemas abertos de inteligência artificial (integrar máquinas com inteligência artificial à internet das coisas, às redes sociais e à programação aberta, com potencial de mudar radicalmente a nossa relação com as máquinas e elas entre si) e várias outras, como novos materiais para o armazenamento de energia, nanomateriais "bidimensionais", veículos autônomos e não tripulados (drones de todo tipo com maior autonomia), optogenética (células vivas manipuladas geneticamente que respondem a ondas de luz), produção de órgãos humanos em chips eletrônicos”. Esses são os investimentos feitos e as inovações tecnológicas que tendem a mudanças profundas na sociedade, nos próximos anos.
              Diante disso, é necessário que haja uma regulamentação, norteada em princípios bioéticos, para evitar abusos, especialmente o risco de desumanização na relação entre as pessoas. Todas as inovações podem trazer benefícios, mas há preocupações quanto ao uso destas tecnologias, que cerceiem a liberdade das pessoas, favorecendo arbitrariedades. Por isso o debate em relação ao uso destas tecnologias deve permitir que elas estejam a favor das pessoas e não venham a ser usadas inclusive politicamente para privá-las de direitos humanos já conquistados. Este certamente será um debate do século 21, necessário para conciliar tecnologia e valorização do ser humano.
            </p><br>
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
            <img src="app/img/web3.0.png" alt="" class="rounded-start img-modal  mb-4">
            <h3 class="h3">As inovaçõesa e riscos da internet do futuro (Web 3.0)</h3>

            <p>No princípio, havia a Web 1.0. Eram páginas estáticas, com pouca interatividade, resentadas apenas por hiperlinks que levavm a outros links. Algum tempo depois, suegiu a Web 2.0, os desenhos se sotisficaram, permitindo aos usuários uma interação maior. Fizeram-se, então, as mídias socias, estabeleceram-se os negócios virtuais e começou a coleta - e eveltualmente a venda - de nossos dados pessoais. É nesse ambiente que navegamos hoje em dia na rede mundial. No horizonte, desenha-se um novo amanhecer com a Web 3.0, um ecossistema supostamnete mais democrático e descentralizado, com o objetivo nada disfarçado de tirar poder das chamadas grandes corporações tecnológicas, tais como o Goolgle, o Facebook e o Twitter. Na terceira atualização da internet, os especialistas acreditam que paradigmas do passado serão rompidos graças ao excesso de informações disponíveis. Conceitos estabelecidos na Web 1.0, como a autoridade de páginas de internet e veículos da imprensa, passam a ser questionados em um nível nunca visto.

              A Web 3.0 deve manter a existência das redes sociais, mas estas passam a ter um protagonismo maior do que na versão anterior. Se antes as plataformas eram usadas para entretenimento descompromissado, impulsionar vendas ou fortalecer a reputação digital de marcas, agora as mídias sociais adotam um caráter de dependência social.Um fator interessante dessa internet futurística, é a relação de posse de bens digitais. Exemplo disso são os tokens não fungíveis (NFTs), que concedem propriedade sobre obras artísticas, músicas, colecionáveis e até itens de jogos. Com o anúncio do Metaverso pelo antigo Facebook (hoje, chamada Meta), esses itens virtuais parecem ter ganhado ainda mais destaque: uma casa pode custar milhões de dólares nesse mundo digital.
            </p><br>
            <p><label class="label label-default">Atualizado em:</label> 09 de julho, 2022</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>