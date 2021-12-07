<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Parceria (exemplo: igreja)</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se como uma parceria da ONG APV para ajudar as pessoas em situação de vulnerabilidade, apoie nossa causa e nos ajude.</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="nomeParceria">Nome</label>
                <input type="text" id="nomeParceria" name="nm_parc" placeholder="Ex.: Igreja Nossa Senhora de Lourdes" required>

                <label for="telefoneParceria">Telefone para Contato</label>
                <input type="text" id="telefoneParceria" name="tel_parceria" placeholder="Ex.: (11) 98900-1234" required>

                <label for="tpLogParceria">Tipo Logradouro</label>
                <input type="text" id="tpLogParceria" name="tp_logra_parc" placeholder="Ex.: Rua, Avenida, Condomínio..." required>

                <label for="nmLogParceria">Nome Logradouro</label>
                <input type="text" id="nmLogParceria" name="nm_logra_parc" placeholder="Ex.: Rua Marcelo de Andrade" required>                

                <label for="numLogParceria">Número Logradouro</label>
                <input type="text" id="numLogParceria" name="num_logra_parc" placeholder="Ex.: 498" required>

                <label for="bairroParceria">Bairro</label>
                <input type="text" id="bairroParceria" name="bairro_parc" placeholder="Ex.: Jardim Munhoz" required>

                <label for="cidadeParceria">Cidade</label>
                <input type="text" id="cidadeParceria" name="cidade_parc" placeholder="Ex.: São José dos Campos" required>

                <label for="cepParceria">CEP</label>
                <input type="text" id="cepParceria" name="cep_parc" placeholder="Ex.: 01245-456" required>

                <label for="emailParceria">E-mail</label>
                <input type="email" id="emailParceria" name="email_parc" placeholder="Ex.: nossasenhora_lourdes@teste.com" required>

                <label for="siteParceria">Site (não obrigatório)</label>
                <input type="text" id="siteParceria" name="site_parc" placeholder="Ex.: nossasenhoralourdes.com.br">

                <label for="senhaParceria">Senha</label>
                <input type="password" id="senhaParceria" name="senha_parc" placeholder="Sua senha..." required>

                <button type="submit" class="btn btn-success">Cadastrar</button>

                <a class="m-2 p-4" href="<?php echo base_url('ParceriaController/todosParcerias') ?>">
                    Já Cadastrados
                </a>

            </form>
        </div>
    </div>
</section>