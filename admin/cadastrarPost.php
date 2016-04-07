<?php
ob_start();
session_start();
require('../_app/Config.inc.php');

$login = new Login(3);
$logoff = filter_input(INPUT_GET, 'logoff', FILTER_VALIDATE_BOOLEAN);
$getexe = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);

if (!$login->CheckLogin()):
    unset($_SESSION['userlogin']);
    header('Location: index.php?exe=restrito');
else:
    $userlogin = $_SESSION['userlogin'];
endif;

if ($logoff):
    unset($_SESSION['userlogin']);
    header('Location: index.php?exe=logoff');
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Site Admin</title>
        <!--[if lt IE 9]>
            <script src="../_cdn/html5.js"></script> 
         <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/admin.css" />   
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <boby class="painel">

    <?php include('./conteudo/menu.php'); ?>

        <div class="tudo">

            <header>
                <h1>Criar Produto:</h1>
            </header>

            <?php
            
            $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);;
            if (isset($post) && $post['SendPostForm']) {
                
                    $post['post_principal'] = ( $_FILES['post_principal']['tmp_name'] ? $_FILES['post_principal'] : null );
                    $post['post_foto2'] = ( $_FILES['post_foto2']['tmp_name'] ? $_FILES['post_foto2'] : null );
                    $post['post_foto3'] = ( $_FILES['post_foto3']['tmp_name'] ? $_FILES['post_foto3'] : null );
                    $post['post_foto4'] = ( $_FILES['post_foto4']['tmp_name'] ? $_FILES['post_foto4'] : null );
                    $post['post_foto5'] = ( $_FILES['post_foto5']['tmp_name'] ? $_FILES['post_foto5'] : null );

                    unset($post['SendPostForm']);
                    
                    require('./_models/AdminPost.class.php');
                    $admPost = new AdminPost();
                    $admPost->ExeCreate($post);
                    $admPost->getResult();

                    WSErro($admPost->getError()[0], $admPost->getError()[1]);
                } 
            
            ?>

            <form name="PostForm" action="" method="post" enctype="multipart/form-data">

                <label class="label">
                    <span class="field">Titulo:</span>
                    <input type="text" required name="post_title" value="" />
                </label>

                <label class="label">
                    <span class="field">Conteúdo:</span>
                    <textarea class="js_editor" name="category_content" required rows="10"></textarea>
                </label>

                <label class="label">
                    <span class="field">Enviar Foto Principal:</span>
                    <input type="file" required name="post_principal" />
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 2:</span>
                    <input type="file" required name="post_foto2" />
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 3:</span>
                    <input type="file" required name="post_foto3" />
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 4:</span>
                    <input type="file" required name="post_foto4" />
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 5:</span>
                    <input type="file" required name="post_foto5" />
                </label>

                <label class="label_medium left">
                    <span class="field">Data:</span>
                    <input type="text" required class="formDate center" name="category_date" value="<?= date('d/m/Y H:i:s'); ?>" />
                </label>

                <label class="label_medium left">
                    <span class="field">Categoria:</span>
                    <select name="category_parent">
                        <option value="null"> Selecione a Categoria: </option>
                        <option> Fachadas </option>
                        <option> Outdoors </option>
                        <option> ACM </option>
                        <option> Letras em Relevo </option>
                        <option> Adesivos </option>

                    </select>
                </label>

                <input type="reset" class="btn blue" value="Limpar Campos" />
                <input type="submit" class="btn green" value="Cadastrar e Postar" name="SendPostForm" />

            </form>
        </div>
    </body>
</html>
