<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="base" href="www.bastianebraun.com.br"/> <!-- ENDEREÇO DO SITE -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="author" content="Nathã G. Longhi"/> <!-- CRIADOR DO SITE -->
        <meta name="reply-to" content="nathalonghi@gmail.com"/> <!-- EMAIL CRIADOR DO SITE -->
        <meta name="description" content=""/> <!-- DESCRIÇÃO DA EMPRESA -->

        <title>Bastian & Braun Incorporadora</title>

        <!--COMEÇA CSS-->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/slide.css" rel="stylesheet" type="text/css"/>
        <link href="css/carrossel.css" rel="stylesheet" type="text/css"/>
        <link href="js/shadowbox/shadowbox.css" rel="stylesheet" type="text/css"/>
        <link href="css/detalhes.css" rel="stylesheet" type="text/css"/>
        <!--TERMINA CSS-->

        <!--COMEÇA JAVA SCRIPT-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/slide.js" type="text/javascript"></script>
        <script src="js/carroussel.js" type="text/javascript"></script>
        <script src="js/shadowbox/shadowbox.js" type="text/javascript"></script>
        <script src="js/galeriaImgShadowBox.js" type="text/javascript"></script>
        <script src="js/facebook.js" type="text/javascript"></script>
        <!--TERMINA JAVA SCRIPT-->

    </head>
    <body class="body">
        <header>
            <div class="topo">
                <div class="logo"><img src="imagens/logo.png"></div>
                <div class="menu">
                    <?php include('./conteudo/menu.php'); ?>
                </div>
            </div>
        </header>

        <section class="detalhes">
            <div class="tituloProjeto">
                <div class="tituloDetal">Titulo do Projeto</div>
                <hr class="hrDet">
            </div>
            <div class="carrFoto">
                <div class="letraDet"> Fachadas: </div>
                <div class="box_carrossel">
                    <div class="nav back"><p>&laquo;</p></div>
                    <ul class="carrossel">
                        <a title="01" href="imagens/images/01.jpg" rel="shadowbox[vocation]" >
                            <li class="item"><img src="imagens/images/01.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                        <a title="01" href="imagens/images/02.jpg" rel="shadowbox[vocation]" >
                            <li class="item"><img src="imagens/images/02.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                        <a title="01" href="imagens/images/03.jpg" rel="shadowbox[vocation]" >
                            <li class="item"><img src="imagens/images/03.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>                
                        </a>
                        <a title="01" href="imagens/images/04.jpg" rel="shadowbox[vocation]" >  
                            <li class="item"><img src="imagens/images/04.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                        <a title="01" href="imagens/images/05.jpg" rel="shadowbox[vocation]" >
                            <li class="item"><img src="imagens/images/05.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                    </ul>
                    <div class="nav forth"><p>&raquo;</p></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="carrPlanta">
                <div class="letraDet"> Plantas: </div>
                <div class="box_carrossel1">
                    <div class="nav1 back1"><p>&laquo;</p></div>
                    <ul class="carrossel1">
                        <a title="01" href="imagens/images/01.jpg" rel="shadowbox[vocation]" >
                            <li class="item1"><img src="imagens/images/01.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                        <a title="01" href="imagens/images/02.jpg" rel="shadowbox[vocation]" >
                            <li class="item1"><img src="imagens/images/02.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                        <a title="01" href="imagens/images/03.jpg" rel="shadowbox[vocation]" >
                            <li class="item1"><img src="imagens/images/03.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>                
                        </a>
                        <a title="01" href="imagens/images/04.jpg" rel="shadowbox[vocation]" >  
                            <li class="item1"><img src="imagens/images/04.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                        <a title="01" href="imagens/images/05.jpg" rel="shadowbox[vocation]" >
                            <li class="item1"><img src="imagens/images/05.jpg" alt="[Xperia z3 - thumb]" title="Xperia z3 - thumb"/></li>
                        </a>
                    </ul>
                    <div class="nav1 forth1"><p>&raquo;</p></div>
                    <div class="clear1"></div>
                </div>
            </div>
            <form action="email/formEmail.php" method="post" id="form">
                <div class="contatoDet">
                    <div class="contatoTiDet">
                        Entre em contato conosco:
                    </div>
                    <label class="label">
                        <span class="field">Nome:</span><p>
                            <input class="campoIn" type="text" required name="nome" value="" />
                    </label>
                    <label class="label">
                        <span class="field">E-Mail:</span><p>
                            <input class="campoIn" type="text" required name="email" value="" />
                    </label>
                    <label class="label">
                        <span class="field">Telefone:</span><p>
                            <input class="campoIn" type="text" required name="telefone" value="" />
                    </label>
                    <label class="label">
                        <span class="field">Sua mensagem:</span>
                        <textarea class="campoIn" name="mensagem" required rows="10"></textarea>
                    </label>

                        <input type="submit" class="btn green" value="Enviar" name="SendPostForm" />
                        <input type="reset" class="btn blue" value="Limpar" />

                </div>

            </form>

            <div class="informacaoDet">
                <div class="informacaoTiDet">
                    Informaçoes:
                </div>
                <b>Área:</b> Planta perspectivada – 3 dormitórios 162 m².<p>
                    <b>Mais Informações:</b> 2 aptos por andar, 1 suíte master (25 m²) com acesso para a sacada, 2 semi-suítes, Living integrado 3 ambientes com 42 m² <p>
                    <b>Disponibilidade:</b> Sob consulta 
                    <br><br><br>
                <div class="informacaoTiDet">
                    Localização:<p>
                </div>
                Rua Ernesto Alves 456 - Centro - Estrela
                <div class="mapsDetalhes">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3472.651160905373!2d-51.959676085578515!3d-29.49737348208462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951c6398a2f20697%3A0x82f6576767d66201!2sR.+Cel.+Brito%2C+886+-+Centro%2C+Estrela+-+RS%2C+95880-000!5e0!3m2!1spt-BR!2sbr!4v1460134330966" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

        </section>
        <?php include('./conteudo/rodape.php'); ?>
    </body>
</html>
