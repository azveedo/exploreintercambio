<?php 
  use Application\utils\Env;
?>
    <section>
        <div class="content-box">
          <div class="form-content">
            <h1>Eita! Não Autorizado</h1>
            <p>Parece que você não está logado!</p>

            <p style="margin-top: 10px; margin-bottom: 10px;">Esta página é restrita a usuários logados.</p>

            <a href="<?php echo Env::baseUrl(); ?>/login" style="margin-top: 40px;">CLIQUE AQUI PARA ENTRAR</a>
          </div>
        </div>
        <div class="img-bg">
          <img src="./public/assets/images/error-not-authorized.svg">
        </div>
      </section>
