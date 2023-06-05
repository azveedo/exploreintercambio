<section class="main-content">
  <div class="container">
    <div class="container-details">
      <?php foreach ($data as $package): ?>
        <div class="content">
          <div class="box-title-section">
            <h5>sobre o curso</h5>
            <h4><?= $package["nomeCurso"] ?></h4>
          </div>
          <p><?= $package["descricaoView"] ?></p>
        </div>
        <div class="box-details">
          <div class="box-main-details">
            <h5 tabindex="0">Detalhes</h5>
            <ul>
              <li>
                <div class="box-row-details">
                  <h4 tabindex="0">Nível de inglês</h4>
                  <div class="details">
                    <span>A partir do</span>
                    <b><?= $package["nivelView"] ?></b>
                  </div>
                </div>
              </li>
              <li>
                <div class="box-row-details">
                  <h4 tabindex="0">Idade</h4>
                  <div class="details">
                    <span>A partir de</span>
                    <b><?= $package["idadeView"] ?></b>
                  </div>
                </div>
              </li>
              <li>
                <div class="box-row-details">
                  <h4 tabindex="0">Tempo de curso</h4>
                  <div class="details">
                    <span>A partir de</span>
                    <b><?= $package["duracaoView"] ?></b>
                  </div>
                </div>
              </li>
              <li>
                <div class="box-row-details">
                  <h4 tabindex="0">Início do curso</h4>
                  <div class="details">
                    <b><?= $package["inicioView"] ?></b>
                  </div>
                </div>
              </li>
              <li>
                <div class="box-row-details">
                  <h4 tabindex="0">Carga Horária</h4>
                  <div class="details">
                    <span>A partir de</span>
                    <b><?= $package["cargaHorariaView"] ?></b>
                  </div>
                </div>
              </li>
            </ul>
          </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>