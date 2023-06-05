<?php 
  use Application\utils\Env;
?>
    <section>
        <div class="content-box">
          <div class="form-content">
            <h1>Boa! Recebemos seu E-mail</h1>
            <p style="margin-top: 10px; margin-bottom: 10px;">Entraremos em contato o quanto antes, não se esqueça de ficar de olho na caixa de <b>SPAM!</b></p>
            <a href="<?php echo Env::baseUrl(); ?>" style="margin-top: 40px;">PÁGINA INICIAL</a>
          </div>
        </div>
        <div class="img-bg">
          <img src="<?php echo Env::baseUrl(); ?>/public/assets/images/email-sent.svg">
        </div>
      </section>
