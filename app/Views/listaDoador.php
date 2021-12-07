<div class="formcad">
  <table class="table">
    <thead>
      <th>Código</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>E-mail</th>
      <th>CPF</th>
      <th>Data Nascimento</th>
    </thead>
    <tbody>
      <?php foreach ($doadores as $doador) : ?>
        <tr>
          <td><?php echo ($doador->id_doador) ?></td>
          <td><?php echo ($doador->nm_doador) ?></td>
          <td><?php echo ($doador->tel_doador) ?></td>
          <td><?php echo ($doador->email_doador) ?></td>
          <td><?php echo ($doador->cpf_doador) ?></td>
          <td><?php echo ($doador->dt_nasc_doador) ?></td>
          <td>
            <form method="POST">
              <input type="hidden" name="codDoadorAlterar" value="<?php echo($doador->id_doador)?>">
              <button type="submit" class="btn btn-warning">Alterar</button>
            </form>
          </td>
          <td>
            <form method="POST">
              <input type="hidden" name="id_doador" value="<?php echo($doador->id_doador)?>">
              <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>