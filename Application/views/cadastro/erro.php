<?php 
  use Application\utils\Env;
?>
    <section>
        <div class="content-box">
          <div class="form-content">
            <h1>Eita! Deu erro!</h1>
            <p style="margin-top: 10px; margin-bottom: 10px;">Lamentamos, mas ocorreu um erro no processo</p>
            <a href="<?php echo Env::baseUrl(); ?>/login" style="margin-top: 40px;">TENTE NOVAMENTE AQUI</a>
          </div>
        </div>
        <div class="img-bg">
          <img src="<?php echo Env::baseUrl(); ?>/public/assets/images/login-fail.svg">
        </div>
      </section>
