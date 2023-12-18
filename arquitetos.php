<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arquitetos | Mendes Arquitect</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/arquitetos.css">
    <link rel="apple-touch-icon" sizes="180x180" href="icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/icone_navegador/favicon-16x16.png">

    <style>
        .menu {
            background-color: rgba(0, 0, 0, 0.392);
        }

        .menu nav a:nth-child(2)::after {
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
        <section class="main-header">
            <div class="img-main-header">
                <h2>Conheça</h2>
                <h2>Os</h2>
                <h2>Nossos</h2>
                <h2>Arquitetos</h2>
            </div>
        </section>

        <section class="arquitetos">
            <a class="card-arquitetos" href="arquitetos/rafaelBellini.php">
                <img class="img-arquitetos" src="imagens/imagens_arquitetos/rafael_Hoffman.png" alt="Imagem do Guilherme">
                <div class="nome-tipo">
                    <h2>Rafael Bellini</h2>
                    <h3 class="especialidade">Arquitetura Comercial</h3>
                </div>
                <img class="img-exemplo hoffman" src="imagens/imagens_arquitetos/arquitetura_comercial2.png" alt="Exemplo de Projeto">
            </a>

            <a class="card-arquitetos" href="arquitetos/fernandaMelo.php">
                <img class="img-arquitetos" src="imagens/imagens_arquitetos/Fernanda_Melo3.jpg" alt="">
                <div class="nome-tipo">
                    <h2>Fernanda Melo</h2>
                    <h3 class="especialidade">Design de Interiores</h3>
                </div>
                <img class="img-exemplo" src="imagens/imagens_arquitetos/design_interiores2.png" alt="Exemplo de Projeto">
            </a>

            <a class="card-arquitetos" href="arquitetos/fabricioKurmann.php">
                <img class="img-arquitetos" src="imagens/imagens_arquitetos/fabricio_kurmann.jpg" alt="">
                <div class="nome-tipo">
                    <h2>Fabrício Kurmann</h2>
                    <h3 class="especialidade">Arquitetura Residêncial</h3>
                </div>
                <img class="img-exemplo" src="imagens/imagens_arquitetos/arquitetura_residencial.jpg" alt="Exemplo de Projeto">
            </a>

            <a class="card-arquitetos" href="arquitetos/robertaMarroni.php">
                <img class="img-arquitetos" src="imagens/imagens_arquitetos/roberta_marroni.png" alt="">
                <div class="nome-tipo">
                    <h2>Roberta Marroni</h2>
                    <h3 class="especialidade">Paisagismo</h3>
                </div>
                <img class="img-exemplo" src="imagens/imagens_arquitetos/paisagismo.jpg" alt="Exemplo de Projeto">
            </a>

            <a class="card-arquitetos" href="arquitetos/brunaPontinelli.php">
                <img class="img-arquitetos" src="imagens/imagens_arquitetos/bruna_pontinelli.jpg" alt="">
                <div class="nome-tipo">
                    <h2>Bruna Pontinelli</h2>
                    <h3 class="especialidade">Arquitetura Urbana</h3>
                </div>
                <img class="img-exemplo" src="imagens/imagens_arquitetos/arquitetura_urbana.jpg" alt="Exemplo de Projeto">
            </a>
        </section>

        <img id="SeeMore" class="see-more" src="icones/arquitetos/see_more.png" alt="See More">
        <script src="java_script/seeMore.js"></script>
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