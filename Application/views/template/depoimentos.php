<section class="depoimentos">
  <div class="box-title-section">
    <h5>O QUE ESTÃO FALANDO</h5>
    <h4>Confira o que os intercambistas acham de viajar com a Explore</h4>
  </div>
  
  <div class="container">
    <div id="carousel-depoimentos-desktop" class="swiperCarousel">
      <div class="swiper-wrapper">
        <?php foreach($data['testimonials'] as $testimony): ?>
          <div class="swiper-slide">
            <div class="item">
              <div class="dados-depoimento">
                <div class="box-textos">
                    <div class="d-flex">
                      <h3> <?= $testimony['nomeUsuario'] ?></h3>
                      
                      <ul>
                        <li> <?= $testimony['cidade'] ?> </li>
                        <li> <?= $testimony['pais'] ?> </li>
                      </ul>
                      
                    </div> <!-- / d-flex -->

                    <p><?= $testimony['depoimento'] ?></p>

                    <div class="box-avatar" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://source.unsplash.com/dDYRYivNzbI); background-repeat: no-repeat; background-size: cover;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

</section>