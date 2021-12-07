<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Doador</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se como um doador para ajudar as pessoas em situação de vulnerabilidade, doe para melhorar uma vida.</p>
        </div>

        <div class="container">
            <form method="POST">

                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    MANTER ANONIMATO E NÃO PREENCHER OS DADOS
                </label>

                </BR></BR> OU </BR></BR>

                <label for="nomeDoador">Nome Completo</label>
                <input type="text" id="nomeDoador" name="nm_Doador" placeholder="Ex.: Renata Ferreira dos Santos" required>

                <label for="telDoador">Telefone Para Contato</label>
                <input type="text" id="telDoador" name="tel_doador" placeholder="Ex.: (11) 95989-0123" required>

                <label for="emailDoador">E-mail</label>
                <input type="email" id="emailDoador" name="email_Doador" placeholder="Ex.: renatasantos123@teste.com" required>

                <label for="cpfDoador">CPF</label>
                <input type="text" id="cpfDoador" name="cpf_Doador" placeholder="Ex.: 123.654.789-01" required>

                <label for="dataNascDoador">Data de Nascimento</label>
                <input type="text" id="dataNascDoador" name="dt_nasc_Doador" placeholder="Ex.: 02/10/1999" required>

                <label for="senhaDoador">Senha</label>
                <input type="password" id="senhaDoador" name="senha_doador" placeholder="Sua senha..." required>

                <button type="submit" class="btn btn-success">Cadastrar</button>
  
                    <a class="m-2 p-4" href="<?php echo base_url('DoadorController/todosDoadores') ?>">
                        Já Cadastrados
                    </a>            

            </form>
        </div>
    </div>
</section>