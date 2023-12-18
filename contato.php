<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato | Mendes Arquitect</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="apple-touch-icon" sizes="180x180" href="icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/icone_navegador/favicon-16x16.png">

    <style>
        .menu {
            position: relative;
        }

        .link-menu:nth-child(4)::after {
            position: absolute;
            background-color: var(--quaseBranco);
            height: 2px;
            width: 90%;
            left: 5px;
            bottom: -10px;
            transition: 0.3s;

            border-radius: 1px;
        }

        .div-icone {
            margin-left: -15%;
            display: block;
        }

        .icone-perfil > img {
            width: 50px;
            height: 50px;
        }

        @media screen and (max-height: 800px) {
            
            .icone-perfil > img {
            width: 47px;
            height: 47px;
            }
        }

        .erro-sucefull-cadastro {
            margin-top: 1vh;
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
                            <?php
                            if(!isset($_SESSION['icon'])){
                            ?>
                            <a class="link-menu" href="login.php">Login</a>
                            <?php
                            }else{
                                ?>
                                <a class="link-menu" href="logout.php">Logout</a>
                            </nav>
                            <div class="div-icone">
                                <a class="icone-perfil" href="perfil.php"><img src="icones/gimp.png" alt="icone Perfil"></a>
                            </div>
                            
                            <?php
                            }
                            ?>
                        
                    
                    </div>
                </header>

    <main>
        <section class="contato">
            <div class="left">
                <h1>Created Thinking of You</h1>
                <hr>
                <h2>Contate-nos</h2>
                <div class="contatos">
                    <h3><img src="icones/telefone-branco.png"> Tel: +55 11 94301-0919</h3>
                    <h3><img src="icones/email-branco.png"> Mail: mendesarquitect@outlool.com</h3>
                </div>
            </div>
        
            <div class="right">
                <h2>Send Us a Message</h2>
                <form class= "contact-form" action="email.php" method="get">
                    <div class="form-names">
                        <input type="text" name="first_name" class="first-name" 
                        placeholder="Nome" required>
                    </div>
                    <div class="form-email">
                        <input type="email" name="email" id="email" class="email" placeholder="Email" required>
                    </div>
                    <div class="form-select">
                        <span>Selecione o assunto:</span>
                        <select name="tipo-arquitetura" class="tipo-arquitetura" required>
                            <option>Arquitetura Residêncial</option>
                            <option>Arquitetura Comercial</option>
                            <option>Arquitetura Urbana</option>
                            <option>Design de interiores</option>
                            <option>Paisagismo</option>
                            <option>Outro</option>
                        </select>
                    </div>
                    <div class="form-message">
                        <textarea name="message" class="message" cols="30" rows="10" placeholder="Mensagem" required></textarea>
                    </div>
                    <div class="form-buttom">
                        <input type="submit" class="buttom" name="Enviar">
                    </div>

                    <!-- falha -->
                    <?php
                    if(isset($_SESSION['falhamensagem'])):
                ?>
                    <div class = "erro">
                        <p > Falha ao enviar a mensagem!</p>
                    </div>
                <?php
                    endif;
                    unset($_SESSION['falhamensagem']);
                ?>

                    <!-- sucesso -->
                    <?php
                    if(isset($_SESSION['sucessoenvio'])):
                ?>
                    <div class = "erro-sucefull-cadastro">
                        <p > E-mail enviado com sucesso!</p>
                    </div>
                <?php
                    endif;
                    unset($_SESSION['sucessoenvio']);
                ?>

                </form>
            </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>