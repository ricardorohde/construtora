<body class="painel">

    <header id="navadmin">
        <div class="content">

            <h1 class="logomarca">Pro Admin</h1>

            <ul class="systema_nav radius">
                <li class="username">Olá <?= $userlogin['user_name']; ?> <?= $userlogin['user_lastname']; ?></li>
                <li><a class="icon profile radius" href="#">Perfíl</a></li>
                <li><a class="icon users radius" href="#">Usuários</a></li>
                <li><a class="icon logout radius" href="painel.php?logoff=true">Sair</a></li>
            </ul>

            <nav>
                <h1><a href="painel.php" title="Dasboard">Dasboard</a></h1>

                <?php
                //ATIVA MENU
                if (isset($getexe)):
                    $linkto = explode('/', $getexe);
                else:
                    $linkto = array();
                endif;
                ?>

                <ul class="menu">
                    <li class="li<?php if (in_array('posts', $linkto)) echo ' active'; ?>"><a class="opensub" onclick="return false;" href="#">Posts</a>
                        <ul class="sub">
                            <li><a href="cadastrarPost.php">Criar Post</a></li>
                            <li><a href="admPost.php">Listar / Editar Posts</a></li>
                        </ul>
                    </li>

                    <li class="li<?php if (in_array('categories', $linkto)) echo ' active'; ?>"><a class="opensub" onclick="return false;" href="#">Categorias</a>
                        <ul class="sub">
                            <li><a href="#">Criar Categoria</a></li>
                            <li><a href="#">Listar / Editar Categorias</a></li>
                        </ul>
                    </li> 

                    <li class="li<?php if (in_array('empresas', $linkto)) echo ' active'; ?>"><a class="opensub" onclick="return false;" href="#">Empresas</a>
                        <ul class="sub">
                            <li><a href="#">Cadastrar Empresa</a></li>
                            <li><a href="#">Listar / Editar Empresas</a></li>
                        </ul>
                    </li>
                    <li class="li"><a href="../" target="_blank" class="opensub">Ver Site</a></li>
                </ul>
            </nav>

            <div class="clear"></div>
        </div><!--/CONTENT-->
    </header>

    <div class="content form_create">

        <article>