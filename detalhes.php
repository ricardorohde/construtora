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
                <?php include('./carrossel.php'); ?>
            </div>
            <div class="carrPlanta">
                <div class="letraDet"> Plantas: </div>
                <?php include('./carrosselPlanta.php'); ?>
            </div>
        </section>
    </body>
</html>
