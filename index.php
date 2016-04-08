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

    <?php include('slide.php'); ?>

    <section class="corpo">
        <div class="tituloProjeto">
            <hr  class="rl">
            <div class="titulo1">Últimos Projetos</div>
            <hr class="rr">
        </div>

        <div class="caixa">
            <form action="produtos.php?id=$id" method="GET" name="datalhe">
                <p><img src="imagens/michel.png" width="290" height="400"/></p>
                <p class="descProd"> Mont Saint Michel </p>
<!--                    <input name="id" type="hidden" value="<?php echo $postId ?>"  />-->
                <input name="Enviar" type="submit" class="botao" value="Detalhes" />
            </form>
        </div>
        <div class="caixa">
            <form action="produtos.php?id=$id" method="GET" name="datalhe">
                <p><img src="imagens/michel.png" width="290" height="400"/></p>
                <p class="descProd"> Mont Saint Michel </p>
<!--                    <input name="id" type="hidden" value="<?php echo $postId ?>"  />-->
                <input name="Enviar" type="submit" class="botao" value="Detalhes" />
            </form>
        </div>
        <div class="caixa">
            <form action="produtos.php?id=$id" method="GET" name="datalhe">
                <p><img src="imagens/michel.png" width="290" height="400"/></p>
                <p class="descProd"> Mont Saint Michel </p>
<!--                    <input name="id" type="hidden" value="<?php echo $postId ?>"  />-->
                <input name="Enviar" type="submit" class="botao" value="Detalhes" />
            </form>
        </div>
    </section>
    <?php include('./conteudo/rodape.php'); ?>
</body>
</html>
