<div class="formcad">
    <form method="POST">
        <div class="mb-3 col-2">
            <label class="form-label" for="codigoparc">Código:</label>
            <input class="form-control text-center" type="text" id="codigoparc" name="codParceriaAlterar" value="<?php echo($parceria->id_parc)?>" readonly>
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="nomeparc">Nome:</label>
            <input class="form-control" type="text" id="nomeparc" name="nm_parc" value="<?php echo($parceria->nm_parc)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="telefoneparc">Telefone:</label>
            <input class="form-control" type="text" id="telefoneparc" name="tel_parceria" value="<?php echo($parceria->tel_parceria)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="tipolograparc">Tipo Logradouro:</label>
            <input class="form-control" type="text" id="tipolograparc" name="tp_logra_parc" value="<?php echo($parceria->tp_logra_parc)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="nomelograparc">Nome Logradouro:</label>
            <input class="form-control" type="text" id="nomelograparc" name="nm_logra_parc" value="<?php echo($parceria->nm_logra_parc)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="numerolograparc">Número Logradouro:</label>
            <input class="form-control" type="text" id="numerolograparc" name="num_logra_parc" value="<?php echo($parceria->num_logra_parc)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="bairroparc">Bairro:</label>
            <input class="form-control" type="text" id="bairroparc" name="bairro_parc" value="<?php echo($parceria->bairro_parc)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cidadeparc">Cidade:</label>
            <input class="form-control" type="text" id="cidadeparc" name="cidade_parc" value="<?php echo($parceria->cidade_parc)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cepparc">CEP:</label>
            <input class="form-control" type="text" id="cepparc" name="cep_parc" value="<?php echo($parceria->cep_parc)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="emailparc">E-mail:</label>
            <input class="form-control" type="text" id="emailparc" name="email_parc" value="<?php echo($parceria->email_parc)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="siteparc">Site:</label>
            <input class="form-control" type="text" id="siteparc" name="site_parc" value="<?php echo($parceria->site_parc)?>">
        </div>       

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>        
    </form>
</div>