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

    <?php include('./conteudo/menu.php'); ?>

    <div class="tudo">
        <div class="content list_content">

            <section>

                <h1>Posts:</h1>

                <?php
                $posti = 0;
                $getPage = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
                $Pager = new Pager('admPost.php?page=');
                $Pager->ExePager($getPage, 6);

                $readPosts = new Read;
                $readPosts->ExeRead("produto", "LIMIT :limit OFFSET :offset", "limit={$Pager->getLimit()}&offset={$Pager->getOffset()}");
                if ($readPosts->getResult()):
                    foreach ($readPosts->getResult() as $post):
                        $posti++;
                        extract($post);
                        $postId = $post['id'];
                        ?>
                        <article class="cont">
                            <ul class="info post_actions">
                                <strong><h1><?= $post['post_title'] ?></h1></strong>
                                <div class="img thumb_small">
                                    <?= $t = Check::Image('../uploads/' . $post_principal, $post_title, 120, 200); ?>
                                </div>
                                <li class="conteudo"><strong>Conteudo:</strong> <?= $post['category_content'] ?></li>
                                <li class="cat"><strong>Categoria:</strong> <?= $post['category_parent'] ?></li>
                                <li class="botao"><a class="act_view" href="#" title="Ver todas fotos">Ver fotos</a></li>
                                <li class="botao"><a class="act_edit" href="editarPost.php?id=<?= $postId ?>" title="Editar">Editar</a></li>
                                <li class="botao"><a class="act_delete" href="deletPost.php?id=<?= $postId ?>" title="Deletar">Deletar</a></li>
                            </ul>

                        </article>
                        <?php
                    endforeach;

                else:
                    $Pager->ReturnPage();
                    WSErro("Desculpe, ainda não existem posts cadastrados!", WS_INFOR);
                endif;
                ?>

                <div class="clear"></div>
            </section>

            <?php
            $Pager->ExePaginator("produto");
            echo $Pager->getPaginator();
            ?>

            <div class="clear"></div>
        </div> <!-- content home -->
    </div>
    <footer class="main_footer">
        <a href="" title="PROADMIN">&copy; PROADMIN Ver. 1.0</a>
    </footer>    
</html>
<?php
ob_end_flush();
