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
          <img src="app/img/not-1-img.png" alt="" class="rounded-start img-l">
        </div>
        <div class="card--info l d-flex justify-content-center align-items-left flex-column col rounded-end">
          <h3 class="h3">Front in BH chega à sua quinta edição</h3>
          <p>No dia 6 de agosto, a comunidade local de desenvolvedores em Belo Horizonte/MG irá se reunir na capital mineira para participar da 5ª edição do Front in BH. Trata-se de um evento voltado para...</p>
          <a href="#" data-toggle="modal" data-target="#notice" class="read-more-button">Leia mais</a>
        </div>
      </div>
      <div class="line2"></div>

      <!-- CARD 2 -->
      <div class="card d-flex rounded">
        <div class="card--info r d-flex justify-content-center align-items-left flex-column col rounded-start">
          <h3 class="h3">“Mês do Front-End” discute carreira e mercado de trabalho para profissionais de tecnologia</h3>
          <p>A iniciativa, gratuita para qualquer pessoa, tem como objetivo destacar a importância dos desenvolvedores front-end, profissionais que são os responsáveis por criar interfaces de produtos digitais como sites, portais e aplicação web, por exemplo. São esses profissionais que...</p>
          <a href="#" data-toggle="modal" data-target="#notice2" class="read-more-button">Leia mais</a>
        </div>
        <div class="img l">
          <img src="app/img/front-end.png" alt="" class="rounded-end img-r">
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card d-flex rounded">
        <div class="img r">
          <img src="app/img/programacao.jpg" alt="" class="rounded-start img-l">
        </div>
        <div class="card--info l d-flex justify-content-center align-items-left flex-column col rounded-end">
          <h3 class="h3">Iniciativa oferece bolsas para pessoas negras em curso de programação digital</h3>
          <p>Estão abertas as inscrições para o programa Black Power Dev, uma parceria entre Digital House, Mercado Livre e Globant. Restam cerca de 60 vagas que garantem bolsa de 95% do valor da primeira etapa do Certified Tech Developer, curso de programação digital, exclusivamente para pessoas negras...</p>
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
            <h3 class="h3">Front in BH chega à sua quinta edição</h3>

            <p>No dia 6 de agosto, a comunidade local de desenvolvedores em Belo Horizonte/MG irá se reunir na capital mineira para participar da 5ª edição do Front in BH. Trata-se de um evento voltado para desenvolvedores web e mobile, e que tem como foco trazer aos profissionais de Belo Horizonte e região um circuito de palestras abrangentes mostrando o que tem de mais atual no mercado de desenvolvimento Front-end no Brasil e exterior.

              Neste ano, o evento contará com a participação de 8 palestrantes de renome, entre os destaques têm-se as atrações internacionais Tadeu Zagallo (Facebook), Max Firtman (O'Reilly) e Zeno Rocha (Liferay).

              Segundo Victor Arthur, co-fundador e organizador do evento, o Front in BH tem colaborado para promover a capacitação da comunidade de desenvolvedores e estimular novas iniciativas em Belo Horizonte. Victor ressalta que:
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
            <h3 class="h3">“Mês do Front-End” discute carreira e mercado de trabalho para profissionais de tecnologia</h3>

            <p>A iniciativa, gratuita para qualquer pessoa, tem como objetivo destacar a importância dos desenvolvedores front-end, profissionais que são os responsáveis por criar interfaces de produtos digitais como sites, portais e aplicação web, por exemplo. São esses profissionais que montam a estrutura das páginas, na qual os usuários interagem, e se preocupam com o fluxo de navegação entre elas.
              <br>
              O evento contará com a participação dos profissionais que integram as áreas de tecnologia da organização, entre eles: André Gomes, desenvolvedor back-end sênior, Vinicius Guedes, desenvolvedor sênior React Native, Cláudio Castro, desenvolvedor front-end pleno, Maximiler Arouca e Victor Marinho, ambos desenvolvedores front-end sênior.

              Além disso, convidados externos irão participar de treinamentos e palestras sobre temas voltados à carreira de desenvolvedor de software, as ferramentas mais utilizadas no mercado, além de compartilharem suas experiências profissionais.
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
            <img src="app/img/programacao.jpg" alt="" class="rounded-start img-modal  mb-4">
            <h3 class="h3">Iniciativa oferece bolsas para pessoas negras em curso de programação digital</h3>

            <p>Estão abertas as inscrições para o programa Black Power Dev, uma parceria entre Digital House, Mercado Livre e Globant. Restam cerca de 60 vagas que garantem bolsa de 95% do valor da primeira etapa do Certified Tech Developer, curso de programação digital, exclusivamente para pessoas negras.
              <br>
              Interessados têm até o dia 27 de julho - ou enquanto houver vagas disponíveis - para se inscrever por meio do link. As aulas têm início no dia 1º de agosto.

              Para esta edição, a Globant está conectando seu programa interno, denominado Black in Tec, e vai doar equipamentos, como laptops e desktops, para 50 selecionados pelo programa.

              Os candidatos devem cumprir as fases de seleção e realizar o pagamento dos 5% do valor total do curso para garantir sua vaga. A bolsa é parcial e cobre a primeira etapa, que dura um ano e nove meses, e concede o título de “Professional Developer”.
              <br>
              Ao término, o aluno já estará apto a trabalhar na área como analista júnior, com salário médio de R$ 3.866,00. Ele poderá ainda fazer a segunda etapa e se especializar em front ou back-end, com possibilidades de dobrar seus rendimentos.

              Vale dizer que, nesta edição do programa, 50% das vagas serão destinadas às mulheres, cis e trans.

              Lançado em 2021, o Certified Tech Developer oferece conhecimentos técnicos e as soft skills necessárias para atuação em empresas de tecnologia. As aulas são realizadas em formato remoto, 100% ao vivo e online, de segunda a sexta-feira, das 19h às 23h, totalizando 25 horas semanais.
            </p><br>
            <p><label class="label label-default">Atualizado em:</label> 09 de julho, 2022</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <a href="#home" class="back-to-top">aaa<i class="icon-arrow-up"></i></a>

  </main>
</body>

</html>