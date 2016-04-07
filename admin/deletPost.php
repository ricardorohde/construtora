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
                $postid = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
                require('./_models/AdminPost.class.php');
                $admPost = new AdminPost();
                $admPost->ExeDelete($postid);
                $admPost->getResult();

                WSErro($admPost->getError()[0], $admPost->getError()[1]);
                ?>
                <div class="clear"></div>
        </div> <!-- content home -->
    </div>
    <footer class="main_footer">
        <a href="" target="_blank" title="PROADMIN">&copy; PROADMIN Ver. 1.0</a>
    </footer>    
</html>
<?php
ob_end_flush();
