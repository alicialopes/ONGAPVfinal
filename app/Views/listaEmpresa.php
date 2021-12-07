<div class="formcad">
  <table class="table">
    <thead>
      <th>Código</th>  
      <th>Tipo Logradouro</th>
      <th>Nome Logradouro</th>
      <th>Número Logradouro</th>
      <th>Bairro</th>      
      <th>Cidade</th>
      <th>CEP</th>
      <th>CNPJ</th>
      <th>E-mail</th>
      <th>Nome Razão Social</th>
      <th>Nome Fantasia</th>
      <th>Telefone</th>
      <th>Site</th>
    </thead>
    <tbody>
      <?php foreach ($empresas as $empresa) : ?>
        <tr>
          <td><?php echo ($empresa->id_emp) ?></td>
          <td><?php echo ($empresa->tp_logra_emp) ?></td>
          <td><?php echo ($empresa->nm_logra_emp) ?></td>
          <td><?php echo ($empresa->num_logra_emp) ?></td>
          <td><?php echo ($empresa->bairro_emp) ?></td>
          <td><?php echo ($empresa->cidade_emp) ?></td>
          <td><?php echo ($empresa->cep_emp) ?></td>
          <td><?php echo ($empresa->cnpj_emp) ?></td>
          <td><?php echo ($empresa->email_emp) ?></td>
          <td><?php echo ($empresa->nm_rz_social_emp) ?></td>
          <td><?php echo ($empresa->nm_fantasia_emp) ?></td>
          <td><?php echo ($empresa->tel_emp_parceria) ?></td>
          <td><?php echo ($empresa->site_emp) ?></td>
          <td>
            <form method="POST">
              <input type="hidden" name="codEmpresaAlterar" value="<?php echo($empresa->id_emp)?>">
              <button type="submit" class="btn btn-warning">Alterar</button>
            </form>
          </td>
          <td>
            <form method="POST">
              <input type="hidden" name="id_emp" value="<?php echo($empresa->id_emp)?>">
              <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>