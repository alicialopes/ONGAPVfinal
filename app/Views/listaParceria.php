<div class="formcad">
  <table class="table">
    <thead>
      <th>Código</th>  
      <th>Nome</th>
      <th>Telefone</th>
      <th>Tipo Logradouro</th>
      <th>Nome Logradouro</th>      
      <th>Número logradouro</th>
      <th>Bairro</th>
      <th>Cidade</th>
      <th>CEP</th>
      <th>E-mail</th>
      <th>Site</th>      
    </thead>
    <tbody>
      <?php foreach ($parcerias as $parceria) : ?>
        <tr>
          <td><?php echo ($parceria->id_parc) ?></td>
          <td><?php echo ($parceria->nm_parc) ?></td>
          <td><?php echo ($parceria->tel_parceria) ?></td>
          <td><?php echo ($parceria->tp_logra_parc) ?></td>
          <td><?php echo ($parceria->nm_logra_parc) ?></td>
          <td><?php echo ($parceria->num_logra_parc) ?></td>
          <td><?php echo ($parceria->bairro_parc) ?></td>
          <td><?php echo ($parceria->cidade_parc) ?></td>
          <td><?php echo ($parceria->cep_parc) ?></td>
          <td><?php echo ($parceria->email_parc) ?></td>
          <td><?php echo ($parceria->site_parc) ?></td>                    
          <td>
            <form method="POST">
              <input type="hidden" name="codParceriaAlterar" value="<?php echo($parceria->id_parc)?>">
              <button type="submit" class="btn btn-warning">Alterar</button>
            </form>
          </td>
          <td>
            <form method="POST">
              <input type="hidden" name="id_parc" value="<?php echo($parceria->id_parc)?>">
              <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>