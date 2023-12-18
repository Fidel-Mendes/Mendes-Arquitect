<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home | Mendes Aquitect</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="apple-touch-icon" sizes="180x180" href="icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/icone_navegador/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <style>
        .swiper-pagination-bullet {
            background: rgb(255, 255, 255, 0.8);
        }

        .swiper-pagination-bullet-active {
            background: white;
        }

        .swiper-button-next, .swiper-button-prev {
            color: white;
            padding: 0px 20px;
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
            <section class="section-principal">
                <div class="img-principal">
                    <div class="fundo-menu"></div>
                    <img src="imagens/imagens_home/r-architecture-2gDwlIim3Uw-unsplash.jpg" alt="">

                    <div class="fundo-texto">
                        <h1>A confluência entre Elegância, Profissionalismo e Arte.</h1>
                    </div>
                </div>

                <div class="projetos">
                    <a href="projetos.php">Ver Projetos</a>
                </div>
            </section>

            <section class="all-sobre-nos">
                <div class="sobre-nos">
                    <div class="left">
                        <div class="img-left"></div>
                        <div class="fundo-left"></div>
                    </div>

                    <div class="right">
                        <h1>Quem somos nós? <hr></h1>
                        <div class="sobre-nos-conteudo">
                            <h2>
                                A empresa de arquitetura <em>Mendes Arquitect</em> tem como 
                                objetivo concretizar os sonhos daqueles que nos permitem 
                                revirar suas vidas de ponta cabeça, em nossa plataforma 
                                em que você pode inspirar-se com a nossa criatividade e
                                conhecer um pedacinho de nossa prestigiada empresa.     
                            </h2>
        
                            <h2>"Arquitetura é um estado de espírito e não uma profissão."</h2>
                            <h3>- Le Corbuiser </h3>
                        </div>  
                    </div>
                </div>
            </section>

            <section class="mostruario">
                <!-- Slider main container -->
                <div class="swiper swiper-mostruario">
                    <!-- Additional required wrapper -->                    
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide comercial">                        
                            <div class="conteudo-slide">
                                <div class="title-slide">
                                    <h2>Arquitetura</h2>
                                    <h2>Comercial</h2>
                                </div>

                                <table>
                                    <tr>
                                        <td class="img-td"><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Modernidade</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Inovação</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Atraente para os Consumidores</td>
                                    </tr>
                                </table>
                                <a href="projetos.php" class="ver-projetos-slide">
                                    <h3>Ver Mais</h3>
                                </a>
                            </div>
                        </div>                            

                        <div class="swiper-slide residencial">
                            <div class="conteudo-slide">
                                <div class="title-slide">
                                    <h2>Arquitetura</h2>
                                    <h2>residencial</h2>
                                </div>

                                <table>
                                    <tr>
                                        <td class="img-td"><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Modernidade</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Beleza</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Elegância</td>
                                    </tr>
                                </table>
                                <a href="projetos.php" class="ver-projetos-slide">
                                    <h3>Ver Mais</h3>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide DesignDeInteriores">
                            <div class="conteudo-slide">
                                <div class="title-slide">
                                    <h2>Design</h2>
                                    <h2>De</h2>
                                    <h2>Interiores</h2>
                                </div>

                                <table>
                                    <tr>
                                        <td class="img-td"><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Conforto</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Elegância</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Bem-estar</td>
                                    </tr>
                                </table>
                                <a href="projetos.php" class="ver-projetos-slide">
                                    <h3>Ver Mais</h3>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide paisagismo">
                            <div class="conteudo-slide">
                                <div class="title-slide">
                                    <h2>Paisagismo</h2>
                                </div>

                                <table>
                                    <tr>
                                        <td class="img-td"><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Sustentabilidade</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Beleza</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Qualidade de Vida</td>
                                    </tr>
                                </table>
                                <a href="projetos.php" class="ver-projetos-slide">
                                    <h3>Ver Mais</h3>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide urbanismo">
                            <div class="conteudo-slide urb">
                                <div class="title-slide">
                                    <h2>Urbanismo</h2>
                                </div>

                                <table>
                                    <tr>
                                        <td class="img-td"><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Qualidade de Vida</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Organização</td>
                                    </tr>

                                    <tr>
                                        <td><img src="icones/checkList3.png" alt="marcador"></td>
                                        <td>Modernidade</td>
                                    </tr>
                                </table>
                                <a href="projetos.php" class="ver-projetos-slide">
                                    <h3>Ver Mais</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>

            <section class="feedback">
                <!-- Slider main container -->
                <div class="swiper swiper-feedback">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="feedback-clientes">
                            <h1>"A Mendes Arquitect me ajudou muito no meu 
                                sonho de construir minha própria casa, serei 
                                sempre grata a vocês &#128536; recomendo demais! "</h1>
                            <h2>&rtrif; Renata Carvalho</h2>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feedback-clientes">
                            <h1>"Tudo foi incrível &#129294; amei o trabalho de vocês, 
                                com certeza faria de novo e recomento para todo 
                                mundo."</h1>
                            <h2>&rtrif; Thalita Fonseca</h2>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feedback-clientes">
                            <h1>"Arquitetos muito competentes, conseguiram 
                                colocar no papel todas as minhas ideias e 
                                me deram ótimas sugestões 	&#129305;"</h1>
                            <h2>&rtrif; Luiz Martins</h2>
                        </div>
                    </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination pagination-feedback"></div>
                    
                </div>

            </section>
            
            <script>
                const swiper = new Swiper('.swiper', {
                    // Optional parameters
                    direction: 'horizontal',
                    loop: true,
                    
                    // If we need pagination
                    pagination: {
                    el: '.swiper-pagination',
                    },
                    
                    // Navigation arrows
                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    },
                    
                    // And if we need scrollbar
                    scrollbar: {
                    el: '.swiper-scrollbar',
                    },

                    autoplay: {
                    delay: 3000,
                    },

                    //effect swiper
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },

                    speed: 2500,
                    spaceBetween: 100,

                    keyboard: true,
                });
            </script>

            <img id="SeeMore" class="see-more" src="icones/arquitetos/see_more2.png" alt="See More">
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