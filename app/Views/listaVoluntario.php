<div class="formcad">
  <table class="table">
    <thead>
      <th>Código</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>E-mail</th>
      <th>CPF</th>      
      <th>Nome Logradouro</th>
      <th>Número Logradouro</th>
      <th>CEP</th>
      <th>Data Nascimento</th>
      <th>Atividade Proposta</th>
    </thead>
    <tbody>
      <?php foreach ($voluntarios as $voluntario) : ?>
        <tr>
          <td><?php echo ($voluntario->id_vol) ?></td>
          <td><?php echo ($voluntario->nm_vol) ?></td>
          <td><?php echo ($voluntario->tel_vol) ?></td>
          <td><?php echo ($voluntario->email_vol) ?></td>
          <td><?php echo ($voluntario->cpf_vol) ?></td>
          <td><?php echo ($voluntario->nm_logra_vol) ?></td>
          <td><?php echo ($voluntario->num_logra_vol) ?></td>
          <td><?php echo ($voluntario->cep_vol) ?></td>
          <td><?php echo ($voluntario->dt_nasc_vol) ?></td>
          <td><?php echo ($voluntario->ativ_vol) ?></td>
          <td>
            <form method="POST">
              <input type="hidden" name="codVoluntarioAlterar" value="<?php echo($voluntario->id_vol)?>">
              <button type="submit" class="btn btn-warning">Alterar</button>
            </form>
          </td>
          <td>
            <form method="POST">
              <input type="hidden" name="id_vol" value="<?php echo($voluntario->id_vol)?>">
              <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>