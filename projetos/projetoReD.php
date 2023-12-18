<?php
if(!isset($_SESSION)){
  session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Design V&T | Mendes Arquitect</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/hover.css">
    <link rel="stylesheet" href="css_projetos/projetoReD.css">
    <link rel="stylesheet" href="../css/botao-like.css">
    <link rel="stylesheet" href="../css/css_pgProjetos.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="../icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../icones/icone_navegador/favicon-16x16.png">

    <style>
        .menu {
            position: relative;
        }

        .swiper-button-next, .swiper-button-prev {
            color: white;
        }

        .swiper-pagination-bullet-active {
            background: white;
        }

        .div-icone {
            margin-left: -15%;
            display: block;
        }

        .icone-perfil > img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<header>
            <div class="menu">
                <div class="logo-home">
                    <h2><a href="../index.php">Mendes Arquitect</a></h2>
                </div>
                <nav>
                    <a class="link-menu" href="../arquitetos.php">Arquitetos</a>
                    <a class="link-menu" href="../projetos.php">Projetos</a>
                    <a class="link-menu" href="../contato.php">Contato</a>
                    <?php
                    if(!isset($_SESSION['icon'])){
                    ?>
                    <a class="link-menu" href="../login.php">Login</a>
                    <?php
                    }else{
                        ?>
                        <a class="link-menu" href="../logout.php">Logout</a>
                    </nav>
                    <div class="div-icone">
                        <a class="icone-perfil" href="../perfil.php"><img src="../icones/gimp.png" alt="icone Perfil"></a>
                    </div>
                    
                    <?php
                    }
                    ?>
                   
              
            </div>
        </header>

    <a class="voltar" href="../projetos.php">	&larr;&nbsp;<em>Voltar</em></a>

    <main>
        <section class="all">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide slide1">
                        <button id="like">
                            <div class="label">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.4 5.25C5.61914 5.25 3.25 7.3293 3.25 10.0298C3.25 11.8927 4.12235 13.4612 5.27849 
                                14.7604C6.43066 16.0552 7.91714 17.142 9.26097 18.0516L11.5796 19.6211C11.8335 19.793 12.1665 
                                19.793 12.4204 19.6211L14.739 18.0516C16.0829 17.142 17.5693 16.0552 18.7215 14.7604C19.8777 
                                13.4612 20.75 11.8927 20.75 10.0298C20.75 7.3293 18.3809 5.25 15.6 5.25C14.1665 5.25 12.9052 
                                5.92214 12 6.79183C11.0948 5.92214 9.83347 5.25 8.4 5.25Z" fill="rgb(200, 200, 200)"/>
                              </svg>
                              <h2>Curtir</h2>
                            </div>
                            <div class="number" id="number">50</div>
                          </button>
                          <div class="copyright">Imagens Meramente Ilustrativas.</div>

                          <script src="../java_script/botao_like.js"></script>
                    </div>

                    <div class="swiper-slide slide2">                        
                          <div class="copyright">Imagens Meramente Ilustrativas.</div>
                    </div>

                    <div class="swiper-slide slide3">                        
                          <div class="copyright">Imagens Meramente Ilustrativas.</div>
                    </div>

                    <div class="swiper-slide slide4">                        
                          <div class="copyright">Imagens Meramente Ilustrativas.</div>
                    </div>

                    <div class="swiper-slide slide5">                        
                          <div class="copyright">Imagens Meramente Ilustrativas.</div>
                    </div>

                    <div class="swiper-slide slide6">                        
                          <div class="copyright">Imagens Meramente Ilustrativas.</div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                
                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div>-->
                </div>

            <div class="texto">
                <h1>Projeto Rafael & Davila</h1>
                <h2>&nbsp;&nbsp;&nbsp;O exterior não fora muito alterado, contudo, a 
                  estrutura interior de 100m² foi totalmente reaproveitada 
                  para criar um ambiente de vivência confortavelmente 
                  estética e moderna.  A intervenção foi cautelosa nos 
                  ambientes internos que lhe são correlatos, definindo 
                  uma forma de uso do espaço em função do mobiliário, dos 
                  equipamentos e suas interfaces com o espaço construído, 
                  alterando a concepção arquitetônica original, melhorando
                   os âmbitos de funcionalidade, conforto E estética do 
                   local.</h2>
                <div class="by">
                    <h2>Designed by: <a href="../arquitetos/fernandaMelo.php">Fernada Melo</a></h2>
                </div>
            </div>
        </section>
        <a class="next" href="projeto_wildMile.php">	<em>Next</em>&nbsp;&rarr;</a>
    </main>

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

            speed: 1000,
            spaceBetween: 100,

            effect: 'coverflow',
            coverflowEffect: {
                rotate: 30,
                slideShadows: false,
            },

            keyboard: true,
        });
    </script>
</body>
</html>