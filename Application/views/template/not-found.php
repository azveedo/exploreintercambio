<?php 
  use Application\utils\Env;
?>
    <section>
        <div class="content-box">
          <div class="form-content">
            <h1>Erro 404</h1>
            <h3 style="margin-bottom: 10px;">Ooops!</h3>
            <p style="margin-top: 10px; margin-bottom: 15px;">Parece que não conseguimos encontrar a página que você está procurando!</p>

            <a href="<?php echo Env::baseUrl(); ?>" style="margin-top: 40px;">PÁGINA INICIAL</a>
          </div>
        </div>
        <div class="img-bg">
          <img src="./public/assets/images/error.svg">
        </div>
      </section>
