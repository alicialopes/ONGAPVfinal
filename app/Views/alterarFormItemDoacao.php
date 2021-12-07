<div class="formcad">
    <form method="POST">
        <div class="mb-3 col-2">
            <label class="form-label" for="catItemDoacao">Categoria:</label>
            <input class="form-control text-center" type="text" id="catItemDoacao" name="codItemDoacaoAlterar" value="<?php echo($itemdoacao->id_item_doacao)?>" readonly>
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="nomeItemDoacao">Nome:</label>
            <input class="form-control" type="text" id="nomeItemDoacao" name="nm_item" value="<?php echo($itemdoacao->nm_item)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="qtdItemDoacao">Quantidade:</label>
            <input class="form-control" type="text" id="qtdItemDoacao" name="qtde_item" value="<?php echo($itemdoacao->qtde_item)?>">
        </div>        

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>        
    </form>
</div>