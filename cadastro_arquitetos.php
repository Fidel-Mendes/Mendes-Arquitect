<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Arquitetos | Mendes Arquitect</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/cadastro_arquitetos.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="apple-touch-icon" sizes="180x180" href="icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/icone_navegador/favicon-16x16.png">

        <style>
            .menu {
                position: absolute;
            }
            
            footer {
                margin-bottom: -38vh;
            }

            .erro {
                margin-top: -6vh;
                margin-bottom: 2vh;
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
            <section class="container">
                <h1>Cadastre-se.</h1>

                <form action="cadastro_arq_cod.php" method="post">
                    <div class="mesma-linha">
                        <div class="form-nome metade">
                            <label>Nome:</label>
                            <input type="text" id="nome" name="nome" maxlength="50" require>
                        </div>

                        <div class="form-cpf metade">
                            <label>CPF:</label>
                            <input type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" maxlength="14" required>
                            <script src="java_script/mascara_cpf.js"></script>
                        </div>
                    </div>

                    <div class="mesma-linha">
                        <div class="form-cau metade">
                            <label>Documento CAU:</label>
                            <input type="text" id="cau" name="Cau" placeholder="Digite seu CAU..." maxlength="9" required>
                        </div>

                        <div class="form-tel metade">
                            <label>Telefone:</label>
                            <input type="text" id="cll" name="cll" placeholder="(xx) xxxxx-xxxx" maxlength="15" required>
                            <script src="java_script/mascara_tel.js"></script>
                        </div>
                    </div>

                    <div class="form-email">
                        <label for="">Email:</label>
                        <input type="text" id="email" name="Email" placeholder="example@email.com" maxlength="30" required>
                    </div>

                    <div class="mesma-linha">
                        <div class="form-password metade">
                            <label>Senha:</label>
                            <input type="password" id="senha" name="n_pass" maxlength="20" minlength="8" required>
                        </div>

                        <div class="form-confirm-password metade">
                            <label>Confirme sua senha:</label>
                            <input type="password" id="senha" name="c_pass" maxlength="20" minlength="8" required>
                        </div>
                    </div>

                    <h1 class="title2">Area de Especialidade:</h1>
                    <div class="especialidade">
                        <select name="espec" id="select-estado">
                            <option value="1">Arquitetura Urbana</option>
                            <option value="2">Arquitetura Residêncial</option>
                            <option value="3">Arquitetura Comercial</option>
                            <option value="4">Design de Interiores</option>
                            <option value="5">Arquiteto Geral (1 ou mais áreas)</option>
                        </select>      
                    </div>

                    <div class="form-botao">
                        <input class="botao" type="submit" name="Cadastrar-se"></input>
                    </div>
                </form>
            </section>

            <a href="cadastro.php" class="cadastro-arquitetos"><h2>Cadastro Usuário</h2></a>

                        <div class="erros">
                            <?php
                                if(isset($_SESSION['cau-use'])):
                            ?>
                                <div class = "erro">
                                    <p>Número de CAU em uso!</p>
                                </div>
                            <?php
                                endif;
                                unset($_SESSION['cau-use']);
                            ?>

                            <?php
                                if(isset($_SESSION['invalidCAU'])):
                            ?>
                                <div class = "erro">
                                    <p>Número de CAU Inválido!</p>
                                </div>
                            <?php
                                endif;
                                unset($_SESSION['invalidCAU']);
                            ?>

                            <?php
                                if(isset($_SESSION['senha-false'])):
                            ?>
                                <div class = "erro">
                                    <p>As senhas não coincidem!</p>
                                </div>
                            <?php
                                endif;
                                unset($_SESSION['senha-false']);
                            ?>
                        </div>
        </main>

       

                   

        <footer>
            <div class="empresa">
                <h1>Created Thinking of You</h1>
                <hr class="hr-frase">
                <h2>Mendes Arquitect.</h2>
            </div>
            
            <div class="footer-contato">
                <h1>Contato</h1><br>
                <h2>mendesarquitect@outlook.com</h2>
                <h2>+55 11 94301-0919</h2>
                <hr>
                <div class="icones">
                    <h2><a href="https://www.instagram.com/etecanhanguera/"><img class="insta" src="icones/instagram-branco.png" alt="Logo Instagram"></a></h2>
                    <h2><a href="https://pt-br.facebook.com/etec.anhanguera.7/"><img class="facebook" src="icones/facebook-branco.png" alt=""></a></h2>
                    <h2><a href="https://www.cps.sp.gov.br/etecs/etec-bartolomeu-bueno-da-silva-anhanguera/"><img class="gmail" src="icones/email-branco.png" alt=""></a></h2>
                </div>
                <h3>Av. Ten. Marques - Fazendinha, Santana de Parnaíba - SP</h3>
            </div>      

            <div class="desenvolvedores">
                <h1>Desenvolvedores</h1>
                <h2>Gabriel Lopes</h2>
                <h2>Fidel Castro</h2>
                <h2>Wellington Ferreira</h2>
                <h2>Gean Amorim</h2>
            </div>

           

            <h3 class="copyright"><div>&copy;</div> Copyright 2022 by Mendes Arquitect.</h3>
        </footer>
    </body>
</html>