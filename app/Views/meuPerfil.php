<?php
echo view('header.php');
?>

<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Alterar meu dados</h2>
            <p>Caso precise alterar seus dados como doador, apenas preencha com os dados atuais corretos e aperte o botão "Alterar", assim seus dados serão atualizados.</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="nomeDoador">Nome Completo</label>
                <input type="text" id="nomeDoador" name="nm_Doador" placeholder="Seu nome..." >

                <label for="telDoador">Telefone Celular</label>
                <input type="text" id="telDoador" name="nm_Doador" placeholder="Seu nome..." >

                <label for="emailDoador">Email</label>
                <input type="email" id="emailDoador" name="email_Doador" placeholder="Seu email..." >

                <label for="cpfDoador">CPF</label>
                <input type="text" id="cpfDoador" name="cpf_Doador" placeholder="999.999.999-99" >

                <label for="dataNascDoador">Data de Nascimento</label>
                <input type="text" id="dataNascDoador" name="dt_nasc_Doador" placeholder="99/99/9999" >

                <label for="senhaDoador">Senha</label>
                <input type="password" id="senhaDoador" name="senha_doador" placeholder="Sua senha..." >

                <button type="submit" class="btn btn-success">Alterar</button>

            </form>
        </div>
    </div>
</section>

<?php
echo view('footer.php');
?>
