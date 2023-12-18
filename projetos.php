<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetos | Mendes Aquitect</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/projetos.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="apple-touch-icon" sizes="180x180" href="icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/icone_navegador/favicon-16x16.png">
    
    <style>
        .menu {
            background-color: rgba(0, 0, 0, 0.356);
        }

        .menu nav a:nth-child(3)::after {
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

            .div-icone {
                margin-left: -10%;
            }

            .icone-perfil > img {
            width: 47px;
            height: 47px;
            }
        }

        .footer-contato hr {
            margin-bottom: 5px;
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
            <section class="hearder-main">
                <div class="title">
                    <h2>Inspire-se</h2>
                </div>
            </section>

            <section class="projetos">
                
                <a href="projetos/projeto_uluwatu.php">
                    <div class="exemplo-projetos projeto1">
                        <div class="conteudo-projetos">
                            <h1>Residência Uluwatu</h1>
                            <h2>1.070 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projetoJeB.php">
                    <div class="exemplo-projetos projeto2">
                        <div class="conteudo-projetos">
                            <h1>Residência J&B</h1>
                            <h2>422 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projetoMet.php">
                    <div class="exemplo-projetos projeto3">
                        <div class="conteudo-projetos">
                            <h1>Residência M&B</h1>
                            <h2>350 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projetoVeT.php">
                    <div class="exemplo-projetos projeto4">
                        <div class="conteudo-projetos">
                            <h1>Design V&T</h1>
                            <h2>1.100 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projetoReD.php">
                    <div class="exemplo-projetos projeto5">
                        <div class="conteudo-projetos">
                            <h1>Interiores R&D</h1>
                            <h2>100 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projeto_wildMile.php">
                    <div class="exemplo-projetos projeto6">
                        <div class="conteudo-projetos">
                            <h1>Parque Wild Mile</h1>
                            <h2>300 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projeto_hanazaki.php">
                    <div class="exemplo-projetos projeto7">
                        <div class="conteudo-projetos">
                            <h1>Jardim HanaZaki</h1>
                            <h2>120 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projeto_westwing.php">
                    <div class="exemplo-projetos projeto8">
                        <div class="conteudo-projetos">
                            <h1>Loja Westwing</h1>
                            <h2>127 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

                <a href="projetos/projeto_prqBrasil.php">
                    <div class="exemplo-projetos projeto9">
                        <div class="conteudo-projetos">
                            <h1>Parque Brasil</h1>
                            <h2>1.650 m²</h2>

                            <h3 class="ver-projeto">Ver Projeto 
                                <img class="ver-projeto__seta" src="icones/seta_laranja.png" alt="">
                            </h3>
                        </div>
                    </div>
                </a>

            </section>

            <div class="fundo-decoracao"></div>
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