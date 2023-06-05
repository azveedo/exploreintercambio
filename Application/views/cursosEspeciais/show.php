<?php 
  use Application\utils\Env;
  require './application/views/template/course-details-main-content.php';
?>

<?php $stripePublicKey = 'pk_test_51N4rtfIRgykSydFWmt2QJFv0omtITN8P6AsgoicN1sqCBUdeJZ4uxe7i1VOzZGoy0B0jQloXyxFQpzpjltwmYjzN00W0VoppQm'; ?>

<?php if(Env::hasLoggedUser()): ?>
<div class="container" style="margin-top: 40px;">
  <form method="post" action="<?php echo Env::baseUrl(); ?>/comprar/executar">
    <input type="hidden" name="idCurso" id="idCurso" value="<?php echo $data["pacote"]["idCurso"] ?>" />
    <input type="hidden" name="nomeCurso" id="nomeCurso" value="<?php echo $data["pacote"]["nomeCurso"] ?>" />

    <h3>Gostou desse pacote?</h3>
    <div class="centeringButton">
      <button type="submit" class="Btn">Comprar<svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
      </button>
    </div>
  </form>
<?php else: ?>
<div class="container" style="margin-top: 40px;">
  <div class="centeringText">
    <h3>Por favor faça o <a class="loginBtn" href="<?php echo Env::baseUrl(); ?>/login">login</a> aqui para comprar.</h3>
  </div>
</div>
<?php endif; ?>
</div>

<div class="container" style="display: none">
  <stripe-buy-button class="frame-btn-stripe"
    buy-button-id="<?php echo $data['pacote']['linkPagamento']?>"
    publishable-key="<?php echo $stripePublicKey ?>"
  >
  </stripe-buy-button>
</div>


<?php require './application/views/template/form-question.php'?>