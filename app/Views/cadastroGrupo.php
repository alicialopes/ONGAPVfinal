<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Grupo Vulnerável</h2>
            <p>Você viu alguma pessoa em situação de vulnerabilidade nas ruas e quer ajudar de algum como? Aqui é o lugar certo! Cadastre as informações desse grupo e iremos incluí-los na nossa causa!</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="apelidoGrupo">Apelido</label>
                <input type="text" id="apelidoGrupo" name="local_grupo" placeholder="Ex.: Quarteto de Adolescentes" required>

                <label for="localGrupo">Localização</label>
                <textarea id="localGrupo" name="apelido_grupo" placeholder="Descreva com o máximo de detalhes possíveis onde o grupo se encontra, ex.: Se encontram próximo de um galpão abandonado chamado Borlem, no Jardim Munhoz, em Guarulhos - SP..." style="height:200px" required></textarea>

                <label for="descGrupo">Descrição</label>
                <textarea id="descGrupo" name="desc_grupo" placeholder="Descreva o grupo com a quantidade de pessoas, idade aproximada, características físicas, ex.: Quatro homens, idade entre 10 a 14 anos, todos com altura entre 1.60 a 1.70, brancos..." style="height:200px" required></textarea>

                <button type="submit" class="btn btn-success">Cadastrar</button>

            </form>
        </div>
    </div>
</section>