<div class="formcad">
    <form method="POST">
        <div class="mb-3 col-2">
            <label class="form-label" for="codigovol">Código:</label>
            <input class="form-control text-center" type="text" id="codigovol" name="codVoluntarioAlterar" value="<?php echo ($voluntario->id_vol) ?>" readonly>
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="nomevol">Nome:</label>
            <input class="form-control" type="text" id="nomevol" name="nm_vol" value="<?php echo ($voluntario->nm_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="telefonevol">Telefone:</label>
            <input class="form-control" type="text" id="telefonevol" name="tel_vol" value="<?php echo ($voluntario->tel_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="emailvol">E-mail:</label>
            <input class="form-control" type="text" id="emailvol" name="email_vol" value="<?php echo ($voluntario->email_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cpfvol">CPF:</label>
            <input class="form-control" type="text" id="cpfvol" name="cpf_vol" value="<?php echo ($voluntario->cpf_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="nomelogravol">Nome Logradouro:</label>
            <input class="form-control" type="text" id="nomelogravol" name="nm_logra_vol" value="<?php echo ($voluntario->nm_logra_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="numerologravol">Número Logradouro:</label>
            <input class="form-control" type="text" id="numerologravol" name="num_logra_vol" value="<?php echo ($voluntario->num_logra_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="cepvol">CEP:</label>
            <input class="form-control" type="text" id="cepvol" name="cep_vol" value="<?php echo ($voluntario->cep_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label class="form-label" for="datanascimentovol">Data de Nascimento:</label>
            <input class="form-control" type="text" id="datanascimentovol" name="dt_nasc_vol" value="<?php echo ($voluntario->dt_nasc_vol) ?>">
        </div>

        <div class="mb-3 col-12">
            <label for="atividadevol">Atividade Proposta:</label>
            <select id="atividadevol" name="ativ_vol">
                <option value="Entregar_Doacoes">Entregar as doações</option>
                <option value="Separar_Doacoes">Separar as doações</option>
                <option value="Preparacao_Alimentos">Preparação de alimentos</option>
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>
    </form>
</div>