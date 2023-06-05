<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Destino</th>
              <th scope="col">Duração</th>
              <th scope="col">Acomodação</th>
              <th scope="col">Preço</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['pacotes'] as $programa) { ?>
              <tr>
                <td>
                  <?= $programa['idPrograma'] ?>
                </td>
                <td>
                  <?= $programa['destino'] ?>
                </td>
                <td>
                  <?= $programa['duracao'] ?>
                </td>
                <td>
                  <?= $programa['tipoAcomodacao'] ?>
                </td>
                <td>
                  <?= $programa['preco'] ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>