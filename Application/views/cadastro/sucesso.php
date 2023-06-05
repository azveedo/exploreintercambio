<?php 
  use Application\utils\Env;
?>
    <section>
        <div class="content-box">
          <div class="form-content">
            <h1>Seja Bem Vindo!</h1>
            <p style="margin-top: 10px; margin-bottom: 10px;">Você foi cadastrado em nosso sistema</p>
            <p style="margin-top: 10px; margin-bottom: 20px;"><b>Explore</b> nosso site e encontre um pacote com a sua cara!</p>

            <a href="<?php echo Env::baseUrl(); ?>/dashboard" style="margin-top: 40px;">ENTRE NA CENTRAL DA SUA CONTA</a>
          </div>
        </div>
        <div class="img-bg">
          <img src="<?php echo Env::baseUrl(); ?>/public/assets/images/login-sucess.svg">
        </div>
      </section>
