<section class="main-content">
  <div class="content">
    <h4>EXPLORE IDIOMAS COM FOCO EM PROFISSÕES!</h4>
    <p>
     O programa de intercâmbio de estudo do idioma com foco em profissões é ideal para quem busca aprimorar o idioma e, além disso, focar no aprendizado de assuntos referentes à sua carreira.
    </p>

    <p>
      Escolhendo esse programa certamente o intercambista terá um grande diferencial no currículo!
    </p>
  </div>
</section>

<?php
$shortDurationCourses = $data['pacotes']['cursos de curta duração'];
?>

<section class="motivos">
  <div class="box-title-section">
    <h5>PROGRAMAS DE IDIOMA COM FOCO EM PROFISSÕES</h5>
    <h4>ESCOLHA O SEU!</h4>
  </div>

  <div class="box-title-section">
    <h5>CURSOS DE CURTA DURAÇÃO</h5>
  </div>

  <div class="container">
    <div id="carousel-idiomas-desktop" class="swiperCarousel swiperCarouselIdiomas">
      <div class="swiper-wrapper">
        <?php foreach ($shortDurationCourses as $package): ?>
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
                    <a href="idiomaFocoProfissoes/ver/<?= $package['idCurso'] ?>">saiba mais</a>
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