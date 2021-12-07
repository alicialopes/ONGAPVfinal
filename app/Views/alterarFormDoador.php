<div class="formcad">
    <form method="POST">
        <div class="mb-3 col-2">
            <label class="form-label" for="codigodoador">Código:</label>
            <input class="form-control text-center" type="text" id="codigodoador"  name="codDoadorAlterar"  value="<?php echo($doador->id_doador )?>" readonly>
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="nomedoador">Nome:</label>
            <input class="form-control" type="text" id="nomefornecedor" name="nm_doador" value="<?php echo($doador->nm_doador)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="telefonedoador">Telefone:</label>
            <input class="form-control" type="text" id="telefonedoador" name="tel_doador" value="<?php echo($doador->tel_doador)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="emaildoador">Email:</label>
            <input class="form-control" type="text" id="emaildoador" name="email_doador" value="<?php echo($doador->email_doador)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cpfdoador">CPF:</label>
            <input class="form-control" type="text" id="cpfdoador" name="cpf_doador" value="<?php echo($doador->cpf_doador)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="datanascimentodoador">Data de Nascimento:</label>
            <input class="form-control" type="text" id="datanascimentodoador" name="dt_nasc_doador" value="<?php echo($doador->dt_nasc_doador)?>">
        </div> 

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>        
    </form>
</div>