<?php
if(!isset($_SESSION)){
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Login Arquitetos | Mendes Arquitect</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="apple-touch-icon" sizes="180x180" href="icones/icone_navegador/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icones/icone_navegador/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icones/icone_navegador/favicon-16x16.png">

        <style>
            .menu {
                position: relative;
            }

            .menu nav a:nth-child(5)::after {
                position: absolute;
                background-color: var(--quaseBranco);
                height: 2px;
                width: 90%;
                left: 5px;
                bottom: -10px;
                transition: 0.3s;

                border-radius: 1px;
            }

            .change-login-arquitetos {
                border-bottom: 1px solid black;
                padding-bottom: 3px;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="menu">
                <div class="logo-home">
                    <h2><a href="index.php">Mendes Arquitect</a></h2>
                </div>
                <nav>
                    <a class="link-menu" href="index.php">Home</a>
                    <a class="link-menu" href="arquitetos.php">Arquitetos</a>
                    <a class="link-menu" href="projetos.php">Projetos</a>
                    <a class="link-menu" href="contato.php">Contato</a>
                    <a class="link-menu" href="login.php">Login</a>
                </nav>
            </div>
        </header>

        <main>
            <section class="login">
                <h2>Olá, Arquiteto!</h2>
                <div class="change-login">
                    <a href="login.php">
                        <h3 class="change-login-usuario">Login Usuário</h3>
                    </a>
                    <h3 class="barra">/</h3>
                    <a href="login_arquitetos.php"><h3>
                        <h3 class="change-login-arquitetos">Login Arquitetos</h3>
                    </a>
                </div>

                <form action="login_arq_cod.php" method="post">
                    <div class="form-email">
                        <input type="email" name="email" class="email" placeholder="Email" required>
                    </div>
                    <div class="form-password">
                        <input type="password" name="senha" class="password" placeholder="Senha" required>
                    </div>
                    <div class="form-entrar">
                        <input type="submit" name="entrar" class="entrar" value="Entrar">
                    </div>
                </form>

                        <?php
                            if(isset($_SESSION['sucesso'])):
                        ?>
                            <div class = "erro-sucefull-cadastro">
                                <p> Arquiteto Cadastrado com sucesso!</p>
                            </div>
                        <?php
                            endif;
                            unset($_SESSION['sucesso']);
                        ?>

                        <?php
                            if(isset($_SESSION['falhalogin'])):
                        ?>
                            <div class = "erro">
                                <p > Login ou senha incorretos!</p>
                            </div>
                        <?php
                            endif;
                            unset($_SESSION['falhalogin']);
                        ?>

                <h3>Não Possui Cadastro? <a href="cadastro.php">Cadastre-se</a></h3>

            </section>
        </main>
    </body>
</html>