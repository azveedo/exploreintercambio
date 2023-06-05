<section class="main-content">
  <div class="content">
    <h4>explore, estude e trabalhe!</h4>
    <p>
      Nos programas de intercâmbio que incluem estudo do idioma + trabalho, os estudantes tem a permissão de trabalhar
      por um período de horas limitado por semana, enquanto estudam no turno inverso.
    </p>

    <p>
      O próprio intercambista é responsável por encontrar a sua vaga de emprego, mas os QG`s da Explore auxiliam com
      dicas sobre emprego, através de workshops específicos de trabalho.
    </p>
  </div>
</section>

<?php
$australiaCourses = $data['pacotes']['australia'];
$canadaCourses = $data['pacotes']['canadá'];
$novaZelandiaCourses = $data['pacotes']['nova zelandia'];
$dubaiCourses = $data['pacotes']['dubai'];
$irlandaCourses = $data['pacotes']['irlanda'];
?>

<section class="motivos">
  <div class="box-title-section">
    <h5>programas de estudar idiomas</h5>
    <h4>ESCOLHA O SEU!</h4>
  </div>

  <div class="box-title-section">
    <h5>Austrália</h5>
  </div>

  <div class="container">
    <div id="carousel-idiomas-desktop" class="swiperCarousel swiperCarouselIdiomas">
      <div class="swiper-wrapper">
        <?php foreach ($australiaCourses as $package): ?>
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
                    <a href="estudoTrabalho/ver/<?= $package['idCurso'] ?>">saiba mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="box-title-section">
    <h5>Canadá</h5>
  </div>

  <div class="container">
    <div id="carousel-idiomas-desktop" class="swiperCarousel swiperCarouselIdiomas">
      <div class="swiper-wrapper">
        <?php foreach ($canadaCourses as $package): ?>
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
                    <a href="estudoTrabalho/ver/<?= $package['idCurso'] ?>">saiba mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="box-title-section">
    <h5>Nova Zelândia</h5>
  </div>
  <div class="container">
    <div id="carousel-idiomas-desktop" class="swiperCarousel swiperCarouselIdiomas">
      <div class="swiper-wrapper">
        <?php foreach ($novaZelandiaCourses as $package): ?>
          <div class="swiper-slide">
            <div class="item"
              style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?= $package['linkImagem'] ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
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
                    <a href="estudoTrabalho/ver/<?= $package['idCurso'] ?>">saiba mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="box-title-section">
    <h5>Dubai</h5>
  </div>

  <div class="container">
    <div id="carousel-idiomas-desktop" class="oneSlide swiperCarouselIdiomas">
      <div class="swiper-wrapper">
        <?php foreach ($dubaiCourses as $package): ?>
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
                    <a href="estudoTrabalho/ver/<?= $package['idCurso'] ?>">saiba mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="box-title-section">
    <h5>Irlanda</h5>
  </div>

  <div class="container">
    <div id="carousel-idiomas-desktop" class="oneSlide swiperCarouselIdiomas">
      <div class="swiper-wrapper">
        <?php foreach ($irlandaCourses as $package): ?>
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
                    <a href="estudoTrabalho/ver/<?= $package['idCurso'] ?>">saiba mais</a>
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