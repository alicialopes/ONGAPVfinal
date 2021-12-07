<div class="formcad">
  <table class="table">
    <thead>
      <th>Categoria</th>  
      <th>Nome</th>
      <th>Quantidade</th>      
    </thead>
    <tbody>
      <?php foreach ($itensdoacoes as $itemdoacao) : ?>
        <tr>
          <td><?php echo ($itemdoacao->id_item_doacao) ?></td>
          <td><?php echo ($itemdoacao->id_tp_doacaoFK) ?></td>
          <td><?php echo ($itemdoacao->nm_item) ?></td>
          <td><?php echo ($itemdoacao->qtde_item) ?></td>                                                    
          <td>
            <form method="POST">
              <input type="hidden" name="codItemDoacaoAlterar" value="<?php echo($itemdoacao->id_item_doacao)?>">
              <button type="submit" class="btn btn-warning">Alterar</button>
            </form>
          </td>
          <td>
            <form method="POST">
              <input type="hidden" name="id_item_doacao" value="<?php echo($itemdoacao->id_item_doacao)?>">
              <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>