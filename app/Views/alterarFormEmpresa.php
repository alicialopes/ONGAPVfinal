<div class="formcad">
    <form method="POST">
        <div class="mb-3 col-2">
            <label class="form-label" for="codigoemp">Código:</label>
            <input class="form-control text-center" type="text" id="codigoemp" name="codEmpresaAlterar" value="<?php echo($empresa->id_emp )?>" readonly>
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="tipolograemp">Tipo Logradouro:</label>
            <input class="form-control" type="text" id="tipolograemp" name="tp_logra_emp" value="<?php echo($empresa->tp_logra_emp)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="nomelograemp">Nome Logradouro:</label>
            <input class="form-control" type="text" id="nomelograemp" name="nm_logra_emp" value="<?php echo($empresa->nm_logra_emp)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="numerolograemp">Número Logradouro:</label>
            <input class="form-control" type="text" id="numerolograemp" name="num_logra_emp" value="<?php echo($empresa->num_logra_emp)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="bairroemp">Bairro:</label>
            <input class="form-control" type="text" id="bairroemp" name="bairro_emp" value="<?php echo($empresa->bairro_emp)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cidadeemp">Cidade:</label>
            <input class="form-control" type="text" id="cidadeemp" name="cidade_emp" value="<?php echo($empresa->cidade_emp)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cepemp">CEP:</label>
            <input class="form-control" type="text" id="cepemp" name="cep_emp" value="<?php echo($empresa->cep_emp)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cnpjemp">CNPJ:</label>
            <input class="form-control" type="text" id="cnpjemp" name="cnpj_emp" value="<?php echo($empresa->cnpj_emp)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="emailemp">E-mail:</label>
            <input class="form-control" type="text" id="emailemp" name="email_emp" value="<?php echo($empresa->email_emp)?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="nomerazaosocialemp">Nome Razão Social:</label>
            <input class="form-control" type="text" id="nomerazaosocialemp" name="nm_rz_social_emp" value="<?php echo($empresa->nm_rz_social_emp)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="nomefantasiaemp">Nome Fantasia:</label>
            <input class="form-control" type="text" id="nomefantasiaemp" name="nm_fantasia_emp" value="<?php echo($empresa->nm_fantasia_emp)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="telefoneemp">Telefone:</label>
            <input class="form-control" type="text" id="telefoneemp" name="tel_emp_parceria" value="<?php echo($empresa->tel_emp_parceria)?>">
        </div> 

        <div class="mb-3 col-12">
            <label class="form-label" for="siteemp">Site:</label>
            <input class="form-control" type="text" id="siteemp" name="site_emp" value="<?php echo($empresa->site_emp)?>">
        </div> 

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>        
    </form>
</div>