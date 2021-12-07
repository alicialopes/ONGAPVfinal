<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<!-- adicionei o xmlns -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- adicionei -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="http://localhost/2021/tccfinal/public/css/style.css" rel="stylesheet" />
    <title>ONG APV</title>

    <!-- adicionei -->
    <style type="text/css" media="all">
        #tudo {
            border: #CCCCCC 1px solid;
            width: 1200px;
            margin: 0 auto;
            background-color: #F9FFFF;
        }

        .titulo {
            text-align: center;
            background-color: #28DCDC;
            font-weight: bold;
            font-size: 28px;
        }

        .bd_titulo {
            text-align: center;
            background-color: #CCCCCC;
            font-weight: bold;
            font-size: 18px;
        }
    </style>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> <!-- adicionei -->
    <script type="text/javascript">
        $(function() {
            function removeCampo() {
                $(".removerCampo").unbind("click");
                $(".removerCampo").bind("click", function() {
                    if ($("tr.linhas").length > 1) {
                        $(this).parent().parent().remove();
                    }
                });
            }

            $(".adicionarCampo").click(function() {
                novoCampo = $("tr.linhas:first").clone();
                novoCampo.find("input").val("");
                novoCampo.insertAfter("tr.linhas:last");
                removeCampo();
            });
        });
    </script>
</head>

<body>
    <!-- adicionei -->
    <section class="contato">
        <form method="Post" action="<?php echo base_url('./ItemDoacaoController/inserirItemDoacao')?>" name="frm_campo_dinamico">
        <h1></h1>
            <div id="tudo">
                <table style="width: 1200px" cellpadding="2" cellspacing="4">
                    <tr>
                        <td style="height: 50px" colspan="4" class="titulo">Doações</td>
                    </tr>
                    <!-- separador -->
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">Preencha os campos de acordo com o que você pretende doar.</td>
                    </tr>
                    <!-- separador -->
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td style="height: 40px" class="bd_titulo">Categoria</td>
                        <td class="bd_titulo">Nome (arroz, blusa)</td>
                        <td class="bd_titulo">Quantidade (unidade)</td>
                        <td class="bd_titulo">Apagar</td>
                    </tr>
                    <!-- separador -->
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr class="linhas">

                        <td>
                            <select name="catItemDoacao" style="text-align:center">
                                <option value="" selected="selected">Selecione uma categoria...</option>
                                <option value="Absorvente">Absorvente</option>
                                <option value="Alimento">Alimento</option>
                                <option value="Mascara">Máscara</option>
                                <option value="ProdutoDeHigiene">Produto De Higiene</option>
                                <option value="Vestimenta">Vestimenta</option>
                            </select>
                        </td>
                        <td><input type="text" name="nomeItemDoacao" style="text-align:center" /></td>
                        <td><input type="text" name="qtdItemDoacao" style="text-align:center" /></td>
                        <td><a href="#" class="removerCampo" title="Remover linha"><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <a href="#" class="adicionarCampo" title="Adicionar item" style="text-align:center" ><i class="fas fa-plus-circle"></i></a>
                        </td>
                    </tr>
                    <tr>
                    <td align="right" colspan="4">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    </td>
                    </tr>
                </table>
        </form>
        </div>
    </section>

    <?php
/*
    if ($_POST) {
        $categoria = $_POST['categoria'];
        $nome = $_POST['nome'];
        $qtd = $_POST['qtd'];
        $quant_linhas = count($qtd);

        // exibindo os dados
        for ($i = 0; $i < $quant_linhas; $i++) {
        echo  "Categoria: " . $categoria[$i] . "<br />";
        echo  "Nome: " . $nome[$i] . "<br />";
        echo  "Quantidade: " . $qtd[$i] . "<br />";
        }
    }*/
    ?>

</body>

</html>