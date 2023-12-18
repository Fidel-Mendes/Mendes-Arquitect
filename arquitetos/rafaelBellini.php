<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Perfil Arquitetos | Mendes Arquitect</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/hover.css">
        <link rel="stylesheet" href="../css/perfil_arquiteto.css">
        <link rel="apple-touch-icon" sizes="180x180" href="./icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../icones/icone_navegador/favicon-16x16.png">

        <style>
            .menu {
                position: relative;
            }

            .first-section {
                background: url(../imagens/imagens_perfil/residencial.jpg);
                background-size: cover;
            }

            .fundo-arquiteto {
                background: url(../imagens/imagens_perfil/background8.jpg);
                background-size: cover;
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
                    <h2><a href="../index.php">Mendes Arquitect</a></h2>
                </div>
                <nav>
                    <a class="link-menu" href="../index.php">Home</a>
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

        <main>
            <a class="voltar" href="../arquitetos.php">	&larr;&nbsp;<em>Voltar</em></a>

            <section class="first-section">
                <div class="first-section-conteudo">
                    <img src="../imagens/imagens_arquitetos/rafael_Hoffman.png" alt="Imagem de Perfil">
                    <h1 class="name">Rafael Bellini</h1>
                </div>
            </section>


            <section class="fundo-arquiteto">
                <div class="sobre-arquiteto">
                    <div class="left">
                        <h2 class="sub-title">Ficha Técnica</h2>
                        <div class="conteudo-left">
                            <table>
                                <tr>
                                    <td>Nome: </td>
                                    <td>Rafael Bellini</td>
                                </tr>
                                <tr>
                                    <td>Especialidade:</td>
                                    <td>Arquitetura Comercial</td>
                                </tr>
                                <tr>
                                    <td>Experiencia: </td>
                                    <td>12 anos de Atuação</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="rigth">
                        <h2 class="sub-title">Sobre</h2>
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;Pós-Graduado em Arquitetura de 
                            Comercial, atualmente arquiteto da rede da Mendes 
                            Arquitect - Inspirando sempre a projetar edifícios e 
                            estruturas para uso comercial. Arquiteto edificador de 
                            funcionalidade dos espaços, combinando design de 
                            interiores e tecnologias de ponta para atender às 
                            necessidades de grandes e pequenos negócios.</h3>
                    </div>

                    <div class="contato">
                        <h2 class="sub-title"> Contato</h2>
                        <div class="contato-conteudo">
                            <table>
                                <tr>
                                    <td><img src="../icones/whatsapp.png" alt=""></td>
                                    <td>+55 24 94567-7634</td>
                                </tr>
                                <tr>
                                    <td><img src="../icones/arroba.png" alt=""></td>
                                    <td class="email">rafaelBellini@outlook.com</td>
                                </tr>
                                <tr>
                                    <td><img src="../icones/instagram-black.png" alt=""></td>
                                    <td>RafaBelliniOficial</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projetos">

            </section>
        </main>
    </body>
</html>