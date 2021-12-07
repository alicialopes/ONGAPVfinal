<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Voluntário</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se como um voluntário para ajudar as pessoas em situação de vulnerabilidade, atitudes também são como doações, nos ajude entregando as doações.</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="nomevol">Nome Completo</label>
                <input type="text" id="nomevol" name="nm_vol" placeholder="Ex.: Maria Ferreira dos Anjos" required>

                <label for="telVol">Telefone Para Contato</label>
                <input type="text" id="telVol" name="tel_vol" placeholder="Ex.: (11) 98989-0000" required>

                <label for="emailvol">E-mail</label>
                <input type="email" id="emailvol" name="email_vol" placeholder="Ex.: maria_anjos123@teste.com" required>

                <label for="cpfvol">CPF</label>
                <input type="text" id="cpfvol" name="cpf_vol" placeholder="Ex.: 154.458.032-00" required>

                <label for="nmlogvol">Endereço</label>
                <input type="text" id="nmlogvol" name="nm_logra_vol" placeholder="Ex.: Rua Campos do Jordão" required>

                <label for="numlogvol">Número do Endereço</label>
                <input type="text" id="numlogvol" name="num_logra_vol" placeholder="Ex.: 123" required>

                <label for="cepvol">CEP</label>
                <input type="text" id="cepvol" name="cep_vol" placeholder="Ex.: 02356-125" required>

                <label for="datanascvol">Data de Nascimento</label>
                <input type="text" id="datanascvol" name="dt_nasc_vol" placeholder="Ex.: 26/02/2001" required>

                <label for="atividade">Atividade</label>
                <select id="atividade" name="ativ_vol" required>
                    <option value="Entregar_Doacoes">Entregar as doações</option>
                    <option value="Separar_Doacoes">Separar as doações</option>
                    <option value="Preparacao_Alimentos">Preparação de alimentos</option>
                </select>

                <label for="senhaDoador">Senha</label>
                <input type="password" id="senhaDoador" name="senha_vol" placeholder="Sua senha..." required>

                <button type="submit" class="btn btn-success">Cadastrar</button>

                <a class="m-2 p-4" href="<?php echo base_url('VoluntarioController/todosVoluntarios') ?>">
                    Já Cadastrados
                </a>

            </form>
        </div>
    </div>
</section>