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
        <link rel="base" href="http://www. .com.br"/> <!-- Link do projeto-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="author" content="Nathã G. Longhi"/>
        <meta name="reply-to" content="nathalonghi@gmail.com"/>
        <meta name="description" content=" "/> <!-- Descrição do projeto-->

        <title></title>

        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php include('./conteudo/menu.php'); ?>

        <div class="tudo">

            <header>
                <h1>Editar Produto:</h1>
            </header>

            <?php
            $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $postid = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            if (isset($post) && $post['SendPostForm']) {

                $post['post_principal'] = ( $_FILES['post_principal']['tmp_name'] ? $_FILES['post_principal'] : 'null' );
                $post['post_foto2'] = ( $_FILES['post_foto2']['tmp_name'] ? $_FILES['post_foto2'] : 'null' );
                $post['post_foto3'] = ( $_FILES['post_foto3']['tmp_name'] ? $_FILES['post_foto3'] : 'null' );
                $post['post_foto4'] = ( $_FILES['post_foto4']['tmp_name'] ? $_FILES['post_foto4'] : 'null' );
                $post['post_foto5'] = ( $_FILES['post_foto5']['tmp_name'] ? $_FILES['post_foto5'] : 'null' );

                unset($post['SendPostForm']);

                require('./_models/AdminPost.class.php');
                $admPost = new AdminPost();
                $admPost->ExeUpdate($postid, $post);
                $admPost->getResult();

                WSErro($admPost->getError()[0], $admPost->getError()[1]);
            } else {
                $read = new Read;
                $read->ExeRead("produto", "WHERE id = :id", "id={$postid}");
                //se não achar nada na consulta acima volta pra pagina
//                if (!$read->getResult()) {
//                    header('Location: painel.php');
//                } else {
                $post = $read->getResult()[0];
                $post['category_date'] = date('d/m/Y H:i:s', strtotime($post['category_date']));
//                }
            }
            ?>

            <form name="PostForm" action="" method="post" enctype="multipart/form-data">

                <label class="label">
                    <span class="field">Titulo:</span>
                    <input type="text" required name="post_title" value="<?php if (isset($post['post_title'])) echo $post['post_title']; ?>" />
                </label>

                <label class="label">
                    <span class="field">Conteúdo:</span>
                    <textarea class="js_editor" name="category_content" rows="10"><?php if (isset($post['category_content'])) echo htmlspecialchars($post['category_content']); ?></textarea>
                </label>

                <label class="label">
                    <span class="field">Enviar Foto Principal:</span>
                    <input type="file" name="post_principal"/>
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 2:</span>
                    <input type="file" name="post_foto2"/>
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 3:</span>
                    <input type="file" name="post_foto3"/>
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 4:</span>
                    <input type="file" name="post_foto4"/>
                </label>

                <label class="label">
                    <span class="field">Enviar Foto 5:</span>
                    <input type="file" name="post_foto5"/>
                </label>

                <label class="label_medium left">
                    <span class="field">Data:</span>
                    <input type="text" required class="formDate center" name="category_date" value="<?php
                    if (isset($post['category_date'])): echo $post['category_date'];
                    else: echo date('d/m/Y H:i:s');
                    endif;
                    ?>" />
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
                <input type="submit" class="btn green" value="Editar e Postar" name="SendPostForm" />

            </form>
        </div>
    </body>
</html>
