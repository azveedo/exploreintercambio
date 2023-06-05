<?php 
  use Application\utils\Env;
  $user = $data["user"];
  $orders = $data["orders"];
?>

  <div class="main-content">
      <section class="content-box-form">
        <div class="container">
          <h1>Minha Central Explore</h1>
          <p>Bem-vindo <b><?php echo $user->nomeUser; ?></b>, como você está?</p>

          <p style="margin-top: 20px;">Veja abaixo seus pacotes comprados!</p>

      <?php if(!empty($orders)): ?>
        <table>
        <thead>
          <tr>
            <th>ID Curso</th>
            <th>Nome do Curso</th>
            <th>Comprado em</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($orders as $order): ?>
            <tr>
              <td><?php echo $order["idCurso"]; ?></td>
              <td><?php echo $order["nomeCurso"]; ?></td>
              <td><?php echo $order["createdAt"]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>  
    </table>
    <?php else: ?>
      Você ainda não tem nenhuma compra conosco.
    <?php endif; ?>
        </div>
      </section>
    </div>
  </div>


<form method="post" action="<?php echo Env::baseUrl(); ?>/login/logout">
  <button type="submit">Sair</button>
</form>

</body>

<script src="./public/dist/index.js" type="module"></script>
        <script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

</html>

          