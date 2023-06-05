<section class="main-content">
  <div class="content">
    <h4>EXPLORE CURSOS ESPECIAIS!</h4>
    <p>
        Os Cursos Especiais são cursos que permitem que o aluno aprimore seu estudo de idioma e ao mesmo tempo, estude em outra área de sua preferência. Nesta modalidade, os cursos são divididos em duas partes: aulas do idioma (inglês, francês ou espanhol) e lições de meio período com diversos tipos de temas.
    </p>

    <p>
        Também chamados de "General +", este programa é ideal para quem quer aprimorar seus conhecimentos em gramática, conversação e audição da língua e ao mesmo tempo ter aulas no idioma sobre as mais diversas áreas, nos campos das artes, moda, negócios, hospitalidade, direito, entre outros.
    </p>
  </div>
</section>

<?php
$especiais = $data['pacotes']['especiais'];
?>

<section class="motivos">
  <div class="box-title-section">
    <h5>PROGRAMAS DE CURSOS ESPECIAIS</h5>
    <h4>ESCOLHA O SEU!</h4>
  </div>

  <div class="box-title-section">
    <h5>CURSOS ESPECIAIS</h5>
  </div>

  <div class="container">
    <div id="carousel-idiomas-desktop" class="swiperCarousel swiperCarouselIdiomas">
      <div class="swiper-wrapper">
        <?php foreach ($especiais as $package): ?>
          <div class="swiper-slide">
            <div class="item"
              style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?= $package['linkImagem'] ?>); background-repeat: no-repeat; background-size: cover;">
              <div class="dados-depoimento box-right">
                <div class="box-textos-motivos">
                  <div class="d-flex">
                    <h3>
                      <?= $package['nomeCurso'] ?> ✦
                    </h3>
                  </div>

                  <p>
                    <?= $package['descricaoCurso'] ?>
                  </p>

                  <div class="btn-anchor-carousel">
                    <a href="cursosEspeciais/ver/<?= $package['idCurso'] ?>">saiba mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php require './Application/views/template/cards-packs.php' ?>

<?php require './Application/views/template/form-question.php' ?>