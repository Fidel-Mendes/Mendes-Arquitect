<?php
    include('conectaBD.php');
    include('protect.php');
    
    
    if(!isset($_SESSION)){
        session_start();
    }

    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $sql_l = "SELECT * FROM Usuario WHERE email = '$email' AND N_senha = '$senha'";
    $sql_query = $conexao->query($sql_l) or die("Erro na execuçãodo SQL: " .$conexao->error);
    
    $login = $sql_query->num_rows;
    
    if($login == 1){
                                    
        while($user = mysqli_fetch_assoc($sql_query)){
        $nome = $user['nome'];
        //$senha = $user['senha'];
        $cpf = $user['cpf'];
        }
    }

    $consulta = "SELECT * FROM Arquiteto WHERE email = '$email' AND n_pass = '$senha'";

    $con = $conexao->query($consulta) or die ($conexao->error);

   
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Mendes Arquitect | Perfil</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/perfil_arquiteto.css">
        

        <style>
        .menu {
            position: relative;

        }
            .div-icone {
            margin-left: -15%;
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
                    <h2><a href="AfterLogin_arquitetos/index_arquitetos.html">Mendes Arquitect</a></h2>
                </div>
                <nav>
                    <a class="link-menu" href="AfterLogin_arquitetos/arquitetos_arquitetos.html">Arquitetos</a>
                    <a class="link-menu" href="AfterLogin_arquitetos/projetos_arquitetos.html">Projetos</a>
                    <a class="link-menu" href="AfterLogin_arquitetos/contato_arquitetos.html">Contato</a>
                    <a class="link-menu" href="logout.php">Logout</a>
                </nav>
                <div class="div-icone">
                    <a class="icone-perfil" href="perfil.php"><img src="icones/gimp.png" alt="icone Perfil"></a>
                </div>
            </div>
        </header>

        <main>
            <section>
            <?php while($dado = $con ->fetch_array()){?>
                <div class="banner_arquiteto">
                <img src="imagens/imagens_perfil/img_perfil_randow.jpg" alt="Foto de Perfil" class="fotoperfi">
                <h2 class="name"><?php echo $dado['nome']; ?></h2>
                </div>

            </section>

            <section class="dados_arquiteto">  
                <div class="Dados_Esq">
                
                </div>
                <div class="Sobremim_Dir">

                </div>
            </section>

            <section class="Projetos_Arquiteto">

                    <h1>Projetos deste arquiteto:</h1>

                <div class="Projetos">
                </div>
                <div class="Projetos">
                </div>
                <div class="Projetos">
                </div>
                <?php }?>
            </section>
        </main>
        
    </body>
</html>