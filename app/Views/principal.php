<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link href="http://localhost/2021/tccfinal/public/css/style.css" rel="stylesheet" />
    <title>ONG APV</title>
</head>

<body>

    <header>
        <div class="center">
            <!--center-->
            <div class="logo">
                <!--logo-->
                <h2>ONG APV</h2>
            </div>
            <div class="menu">
                <!--menu-->
                <a href="#principal">
                    Home
                </a>
                <a href="#ajuda">
                    Quero ajudar
                </a>
                <a href="#relatar">
                    Relatos
                </a>
                <a class="btn-menu" href=" <?php echo base_url('/LoginController/login') ?>">
                    Login
                </a>
            </div>
            <div class="menu-mobile">
                <!--menu-mobile-->
                <i class="fas fa-bars menu-mobile-icon"></i>
                <div class="menu-items">
                    <!--menu-items-->
                    <a href="#principal">Home</a>
                    <a href="#ajuda">Quero ajudar</a>
                    <a href="#relatar">Relatos</a>
                    <a href="<?php echo base_url('/LoginController/login') ?>">Login</a>
                </div>
            </div>
        </div>
    </header>

    <section id="principal" class="main">
        <!--main-->
        <div class="center">
            <!--center-->
            <div class="main_cta">
                <!--main_cta-->
                <h2>Apoio às Pessoas em Situação de Vulnerabilidade</h2>
                <p>TCC - ETEC de Guarulhos</p>
                <a href="<?php echo base_url('/MeuPerfilController/meuperfil') ?>"><button >Meu perfil</button> </a>
            </div>

            <div class="diferenciais">
                <!--diferenciais-->
                <div class="diferencial-single">
                    <!--diferencial-single-->
                    <i class="fas fa-utensils"></i>
                    <h2>Alimentos</h2>
                    <p>Doar alimentos é uma colaboração fundamental para pessoas necessitadas, além de ser uma ação que salva vidas, é um ato de empatia, faça parte!</p>
                </div>
                <div class="diferencial-single">
                    <!--diferencial-single-->
                    <i class="fas fa-socks"></i>
                    <h2>Vestimentas</h2>
                    <p>Tem roupas que não usa mais? Que apenas está ocupando espaço no armário? Desapegue e doe para quem precisa! </p>
                </div>
                <div class="diferencial-single">
                    <!--diferencial-single-->
                    <i class="fas fa-soap"></i>
                    <h2>Absorventes</h2>
                    <p>Absorvente é um dos artigos de higiene mais caros, algumas pessoas que não tem condições recorrem a outros materiais, o que é extremamente perigoso. Doe absorventes, faça sua parte!</p>
                </div>
                <div class="diferencial-single">
                    <!--diferencial-single-->
                    <i class="fas fa-head-side-mask"></i>
                    <h2>Máscaras</h2>
                    <p>Neste tempo de pandemia, estar exposto ao vírus tem sido nossa fraqueza. Respeite quem está nas ruas. Faça a sua parte. Se sair de casa, use máscaras, e se puder doe também!</p>
                </div>

            </div>
        </div>
    </section>

    <section class="sobre">
        <!--sobre-->
        <div class="center">
            <div class="chamada-sobre">
                <!--chamada-sobre-->
                <h2>Sobre Nós</h2>
                <p>Somos uma ONG que tem por objetivo apoiar e auxiliar pessoas em situação de rua através de doações.</p>
            </div>
            <div class="conteudo-sobre">
                <!--conteudo-sobre-->
                <p>Recebemos, catalogamos e armazenamos os recursos essenciais doados por voluntários, sendo estes:
                    <br />
                    <span><i class="fas fa-check-double"></i> Alimentos <br /></span>
                    <span><i class="fas fa-check-double"></i> Vestimentas <br /></span>
                    <span><i class="fas fa-check-double"></i> Produtos de higiene <br /></span>
                    <span><i class="fas fa-check-double"></i> Máscaras <br /></span>
                </p>
                <p>Sendo o intermediário desse processo, nós organizamos grupos de pessoas que podem oferecer doações aos grupos vulneráveis, sendo um Hub de doações de produtos para pessoas em vulnerabilidade social.</p>
            </div>
        </div>
    </section>

    <section id="ajuda" class="conquistas">
        <!--conquistas-->
        <div class="conquista-single-h2">
            <h2>Realize o cadastro como:</h2>
        </div>
        <div class="center">
            <div class="conquista-single" style="width: 18%; margin-right: 2%;">
                <a href="<?php echo base_url('/DoadorController/inserirDoador') ?>"><img src="http://localhost/2021/tccfinal/public/img/doador.png" /> </a>
            </div>
            <div class="conquista-single" style="width: 18%; margin-right: 2%;">
                <a href="<?php echo base_url('/VoluntarioController/inserirVoluntario') ?>"><img src="http://localhost/2021/tccfinal/public/img/voluntario.png" /> </a>
            </div>
            <div class="conquista-single" style="width: 18%; margin-right: 2%;">
                <a href="<?php echo base_url('/EmpresaController/inserirEmpresa') ?>"> <img src="http://localhost/2021/tccfinal/public/img/empresa.png" /> </a>
            </div>
            <div class="conquista-single" style="width: 18%; margin-right: 2%;">
                <a href="<?php echo base_url('/ParceriaController/inserirParceria') ?>"><img src="http://localhost/2021/tccfinal/public/img/parceria.png" /> </a>
            </div>
            <div class="conquista-single" style="width: 18%; margin-right: 2%;">
                <a href="<?php echo base_url('/GrupoController/inserirGrupo') ?>"> <img src="http://localhost/2021/tccfinal/public/img/grupo.png" /> </a>
            </div>
        </div>
    </section>

    <section class="sobre-especifico">
        <!--sobre-especifico-->
        <div class="center">
            <!--center-->
            <img class="sobre-especifico-img" src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/vprojectold1-aum-565_2.jpg?w=600&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=2da015d14e513a4e298c497597562b66">
            <div class="sobre-especifico-content">
                <!--sobre-especifico-content-->
                <h2>Como posso doar?</h2>
                <p>Para se voluntariar e realizar doações, você pode entrar em contato com a ONG APV através da área de cadastro, nós recebemos doações de alimentos não perecíveis, cobertores, vestimentas em bom estado, produtos de higiene como absorventes e também máscaras de proteção para covid-19.
                </p>
                <p>Você também pode ajudar cadastrando grupos vulneráveis, viu pessoas em situação de rua num determinado local? Nos avise cadastrando-os e informando onde estão localizados para que possamos ajuda-las com doações, será de grande colaboração para nós e também para eles.
                </p>
                <p>Doar é amor ao próximo, é empatia e humanidade, além de contribuir para uma sociedade melhor e nos tornarmos pessoas melhores e igualitárias, faça a sua parte e seja solidário, seja voluntário!
                </p>
            </div>
        </div>
    </section>

    <section id="ajuda" class="conquistas">
        <!--conquistas-->
        <div class="conquista-single-h2">
            <h2>DOAR</h2>
        </div>
        <div class="center">
            <div class="conquista-single" style="width: 20%; margin-right: 5%;">
                <a href="<?php echo base_url('/ItemDoacaoController/ItemDoacao') ?>"><img src="http://localhost/2021/tccfinal/public/img/alimentos.png" /></a>
            </div>
            <div class="conquista-single" style="width: 20%; margin-right: 5%;">
                <a href="<?php echo base_url('/ItemDoacaoController/ItemDoacao') ?>"><img src="http://localhost/2021/tccfinal/public/img/vestimenta.png" /></a>
            </div>
            <div class="conquista-single" style="width: 20%; margin-right: 5%;">
                <a href="<?php echo base_url('/ItemDoacaoController/ItemDoacao') ?>"><img src="http://localhost/2021/tccfinal/public/img/absorventes.png" /> </a>
            </div>
            <div class="conquista-single" style="width: 20%; margin-right: 5%;">
                <a href="<?php echo base_url('/ItemDoacaoController/ItemDoacao') ?>"><img src="http://localhost/2021/tccfinal/public/img/máscara.png" /> </a>
            </div>

        </div>

        <section id="relatar" class="conquistas">
            <!--conquistas-->
            <div class="center">
                <div class="conquista-single">
                    <p>Alimentos</p>
                    <p>.</p>
                    <p>.</p>
                    <p>.</p>
                    <h2>10</h2>
                    <p>Voluntarios</p>
                </div>
                <div class="conquista-single">
                    <p>Vestimentas</p>
                    <p>.</p>
                    <p>.</p>
                    <p>.</p>
                    <h2>27</h2>
                    <p>Doações Realizadas</p>
                </div>
                <div class="conquista-single">
                    <p>Absorventes</p>
                    <p>.</p>
                    <p>.</p>
                    <p>.</p>
                    <h2>18</h2>
                    <p>Pessoas ajudadas</p>
                </div>
                <div class="conquista-single">
                    <p>Máscaras</p>
                    <p>.</p>
                    <p>.</p>
                    <p>.</p>
                    <h2>6</h2>
                    <p>Parcerias com ONGS</p>
                </div>
            </div>
        </section>

    </section>

    <section class="depoimentos">
        <!--depoimentos-->
        <div class="center">
            <div class="depoimentos-chamada">
                <!--depoimentos-chamada-->
                <h2>Depoimentos</h2>
                <p>Veja relatos de algumas pessoas já foram ajudadas com doações e também de voluntários que tiveram essa atitude de empatia por meio da ONG.</p>
            </div>

            <div class="carrousel">
                <!--carrousel-->
                <div class="carrousel-single">
                    <!--carrousel-single-->
                    <div class="carrousel-single-box">
                        <!--carrousel-single-box-->
                        <p><i class="fas fa-quote-left"></i>“Fiquei muito grata com doações que recebi da ONG, é muito difícil viver nessa situação, mas ainda existem pessoas que nos ajudam, ouvem e estão do nosso lado.”<i class="fas fa-quote-right"></i></p>
                    </div>
                    <img src="https://cajamar.sp.gov.br/noticias/wp-content/uploads/sites/2/2021/07/site-vacinacao-33-anos.png" />
                    <p>Dona Maria</p>
                    <span>Mulher em situação de rua</span>
                </div>

                <div class="carrousel-single">
                    <!--carrousel-single-->
                    <div class="carrousel-single-box">
                        <!--carrousel-single-box-->
                        <p><i class="fas fa-quote-left"></i>“Fico muito feliz em colaborar com esse projeto incrível doando sempre que posso para pessoas necessitadas, é um gesto de muita bondade e humanidade.”<i class="fas fa-quote-right"></i></p>
                    </div>
                    <img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/s93-pa-5707-01.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=5e3b69f4bc467ced3ccd5340fd09f27c" />
                    <p>Paula</p>
                    <span>Professora</span>
                </div>

                <div class="carrousel-single">
                    <!--carrousel-single-->
                    <div class="carrousel-single-box">
                        <!--carrousel-single-box-->
                        <p><i class="fas fa-quote-left"></i>“Fui ajudado com alimento quando eu mais precisava, mesmo vendendo reciclagem, ás vezes não alcanço dinheiro suficiente pra sobreviver, fico muito grato com as doações.”<i class="fas fa-quote-right"></i></p>
                    </div>
                    <img src="https://osegredo.com.br/wp-content/uploads/2018/01/10-qualidades-de-pessoas-que-se.webp" />
                    <p>Alceu</p>
                    <span>Homem em situação de rua</span>
                </div>
            </div>
        </div>
    </section>

    <section class="contato">
        <!--contato-->
        <div class="center">
            <div class="contato-titulo">
                <!--contato-titulo-->
                <h2>Entre em Contato</h2>
                <p>Interessado em colaborar com a causa ou precisa falar conosco sobre algum assunto? Entre em contato conosco preenchendo os campos abaixo com algumas informações.</p>
            </div>

            <div class="container">
                <form method="POST">

                    <label for="nomeCompleto">Nome Completo</label>
                    <input type="text" id="nomeCompleto" name="nomeCompleto" placeholder="Seu nome...">

                    <label for="cidade">Cidade</label>
                    <select id="cidade" name="cidade">
                        <option value="guarulhos">Guarulhos</option>
                        <option value="saopaulo">São Paulo</option>
                        <option value="outro">Outro</option>
                    </select>

                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Exemplo: relatos, dúvida sobre como ajudar, colaboração...">

                    <label for="assunto">Assunto</label>
                    <textarea id="assunto" name="assunto" placeholder="Escreva algo..." style="height:200px"></textarea>

                    <div class="main_cta">
                    <button type="submit" >Enviar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>

    <?php
    echo view('footer');
    ?>