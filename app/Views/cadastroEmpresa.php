<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Empresa</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se com sua empresa para ajudar as pessoas em situação de vulnerabilidade, ajude-nos para melhorar uma vida. Seja um colaborador!</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="tpLogEmpresa">Tipo Logradouro</label>
                <input type="text" id="tpLogEmpresa" name="tp_logra_emp" placeholder="Ex.: Rua, Avenida, Condomínio..." required>

                <label for="nmLogEmpresa">Nome Logradouro</label>
                <input type="text" id="nmLogEmpresa" name="nm_logra_emp" placeholder="Ex.: Rua José Bezerra" required>

                <label for="numLogEmpresa">Número Logradouro</label>
                <input type="text" id="numLogEmpresa" name="num_logra_emp" placeholder="Ex.: 451" required>

                <label for="bairroEmpresa">Bairro</label>
                <input type="text" id="bairroEmpresa" name="bairro_emp" placeholder="Ex.: Itapegica" required>

                <label for="cidadeEmpresa">Cidade</label>
                <input type="text" id="cidadeEmpresa" name="cidade_emp" placeholder="Ex.: Guarulhos" required>

                <label for="cepEmpresa">CEP</label>
                <input type="text" id="cepEmpresa" name="cep_emp" placeholder="Ex.: 07045-222" required>

                <label for="cnpjEmpresa">CNPJ</label>
                <input type="text" id="cnpjEmpresa" name="cnpj_emp" placeholder="Ex.: 45.569.021/0001-66" required>

                <label for="emailEmpresa">E-mail</label>
                <input type="email" id="emailEmpresa" name="email_emp" placeholder="Ex.: flbrasil_holding123@teste.com" required>

                <label for="nmRazSocEmpresa">Nome Razão Social</label>
                <input type="text" id="nmRazSocEmpresa" name="nm_rz_social_emp" placeholder="Ex.: FL Brasil Holding Industria e Comercios Ltda" required>

                <label for="nmFantEmpresa">Nome Fantasia</label>
                <input type="text" id="nmFantEmpresa" name="nm_fantasia_emp" placeholder="Ex.: Solistica" required>

                <label for="telEmpresa">Telefone Para Contato</label>
                <input type="text" id="telEmpresa" name="tel_emp_parceria" placeholder="Ex.: (11) 95689-0221" required>

                <label for="siteEmpresa">Site (não obrigatório)</label>
                <input type="text" id="siteEmpresa" name="site_emp" placeholder="Ex.: www.flbrasilholding.com.br">

                <label for="senhaEmpresa">Senha</label>
                <input type="password" id="senhaEmpresa" name="senha_emp" placeholder="Sua senha..." required>

                <button type="submit" class="btn btn-success">Cadastrar</button>

                <a class="m-2 p-4" href="<?php echo base_url('EmpresaController/todosEmpParceiras') ?>">
                    Já Cadastrados
                </a>

            </form>
        </div>
    </div>
</section>