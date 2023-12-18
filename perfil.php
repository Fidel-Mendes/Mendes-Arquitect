<?php
    include('conectaBD.php');
    include('protect.php');
    
        if(!isset($_SESSION)){
            session_start();
        }
             $Cpf_user = @$_SESSION['cpf_user'];
             $email = $_SESSION['email'];
             $senha = $_SESSION['senha'];
             $sql_l = "SELECT * FROM Usuario WHERE email = '$email' AND N_senha = '$senha'";
             $sql_query = $conexao->query($sql_l) or die("Erro na execuçãodo SQL: " .$conexao->error);
    
                $login = $sql_query->num_rows;
    
            if($login == 1){
                                    
                while($user = mysqli_fetch_assoc($sql_query)){
                    $nome = $user["nome"];
                    //$senha = $user['senha'];
                    $cpf = $user['cpf'];
                }
            }

            $consulta = "SELECT * FROM Usuario WHERE email = '$email' AND N_senha = '$senha'";

            $con = $conexao->query($consulta) or die ($conexao->error);


        if(isset($_FILES['arquivo'])) {
            echo "arquivo enviado.";
        }
 
    
?>

<?php
        include ("conectaBD.php");
        if(isset($_FILES['arquivo'])) {
            $arquivo = $_FILES['arquivo'];
            
            
            if($arquivo['size'] > 2097152){
              $_SESSION['error_size'] = true; header('Location: perfil.php');  die("Arquivo muito grande!! Max: 2MB");
            }else{
            if($arquivo['error']){
              $_SESSION['error_envio'] = true; header('Location: perfil.php'); die("Falha ao enviar arquivo.");
                }
            }
            $pasta = "arquivos_usuario/";
            $nomedoarquivo = $arquivo["name"];
            /* $data_upload = @$arquivo['data_upload']; */
            $novonomedoarquivo = mysqli_real_escape_string($conexao, $nome);
            $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

            if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg"){
              $_SESSION['error_extension'] = true; header('Location: perfil.php'); die("Tipo de arquivo não aceito");
            }else{}
            $path = $pasta . $novonomedoarquivo . "." . $extensao;
            $sucesso = move_uploaded_file($arquivo["tmp_name"], $path);
            if($sucesso){
                $conexao->query("INSERT INTO imagem_usuario (nome, caminho, cpf_usuario) VALUES ('{$novonomedoarquivo}','{$path}', '{$Cpf_user}')") or die ($conexao->error);
                $_SESSION['rigth'] = true;
                header('location: perfil.php');
            } else{
                $_SESSION['error'] = true;
                header('Location: perfil.php');
               /*  echo "<p>Falha ao enviar arquivo</p>"; */
            }

                $nomeImg = $nome;
        }

           /*  $sql_query_img = $conexao->query ("SELECT * FROM imagem_usuario") or die ($conexao->error); */
           $sql_query_img = @$conexao->query ("SELECT * FROM imagem_usuario WHERE cpf_usuario = '$Cpf_user'") or die ($conexao->error);
            
            
            

             
// 1024bytes = 1kb
// 1024kb = 1mb
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Perfil | Mendes Arqui</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/perfil.css">
        <link rel="stylesheet" href="css/novos_usuarios.css">
        <link rel="stylesheet" href="css/componentes.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/file_user.css">
        <link rel="stylesheet" href="css/botaoperfil.css">

        <style>
            .div-icone {
            margin-left: -20%;
        }

        .icone-perfil > img {
            width: 50px;
            height: 50px;
        }

        #picture__input{
        display: none;
    }

    .picture{
        width: 400px;
        /* height: 230px; */
        aspect-ratio: 16/9;
        background: grey;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ccd;
        border: 2px dashed currentColor;
        cursor: pointer;
        font-family: sans-serif;
        transition: color 300ms ease-in-out, background 300ms ease-in-out;
       
    }

    .picture:hover{
        color: white;
        background: rgb(83, 83, 83);
    }

    .picture:active{
        border-color: rgb(158, 157, 157);
        /* background: rgb(86, 86, 255); */
    }

    .picture__img{
        max-width: 100%;
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
                    <a class="link-menu" href="logout.php">Logout</a>
                </nav>
                <div class="div-icone">
                    <a class="icone-perfil" href="perfil.php"><img src="icones/gimp.png" alt="icone Perfil"></a>
                </div>
            </div>''
        </header>
        

        <main>


              <?php
              
                while($arquivo = $sql_query_img->fetch_array()){

            
                $nomedoarquivo = $arquivo["nome"];
                $data_upload = $arquivo['data_upload'];
                $caminho = $arquivo['caminho']; 
            
            }

            $alternativa = 'imagens/imagens_perfil/img_perfil_randow.jpg';

             ?>

             
            <section class="section-usuario">          
            
                  <img src="<?php  if(empty($caminho)){
                    echo $alternativa;
                  }else{
                    echo $caminho;
                  }  ?> " alt="" class="fotoperfi">



                  <h2 class="name"><?php echo $nome; ?></h2>
          
            </section>
            <div class="divpaiform">
        <form class="form-img" method="POST" enctype="multipart/form-data" action="">
            <p><Label class="txtbt" for="">Selecione o Arquivo
            <input  class="labelzada" name="arquivo" type="file"> Editar foto</p>
            </Label>
            <br>
            
            <button name="upload" class="submitao" type="submit">Enviar Arquivo</button>
        </form>
        </div>
        <br>

        <form class="botaozin" action="" method="POST" enctype="multipart/form-data">
            <button name="delete" class="delete" type="submit">Deletar imagem</button>
        </form>
        

                  <!-- Operação correta -->

                  <?php
                        /* if(isset($_SESSION['rigth'])): */
                    ?>
                        <!-- <div class = "">
                            <p > Arquivo enviado com sucesso!</p>
                        </div> -->
                    <?php
                        /* endif;
                        unset($_SESSION['rigth']); */
                    ?>


                    <!-- TESTE 1 -->

                    <?php
                        if(isset($_SESSION['error'])):
                    ?>
                        <div class = "">
                            <p > Falha ao enviar o arquivo</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['error']);
                    ?>

                    <!-- TESTE 2 -->
        

                    <?php
                        if(isset($_SESSION['error_size'])):
                    ?>
                        <div class = "">
                            <p > O arquivo excede o limite máximo <b>(2MB)</b></p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['error_size']);
                    ?>

                    <!-- TESTE 3 -->

                    <?php
                        if(isset($_SESSION['error_envio'])):
                    ?>
                        <div class = "">
                            <p > Arquivo vazio</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['error_envio']);
                    ?>

                    <!-- TESTE 4 -->

                    <?php
                        if(isset($_SESSION['error_extension'])):
                    ?>
                        <div class = "">
                            <p > Tipo de arquivo ou extensão não aceitos!</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['error_extension']);
                    ?>

                    <?php
                    //apagar imagem

                    if(isset($_POST['delete'])){
                        $sql_del = @$conexao->query ("DELETE FROM imagem_usuario WHERE cpf_usuario = '$Cpf_user' ") or die ($conexao->error);
                        header('location: perfil.php');
                    }

                    ?>

        <tbody>

            </tbody>
        </table>

            <?php
                while($dado = $con->fetch_array()){
                    $_SESSION['cpf_user'] = $dado['cpf'];
                    $Cpf_user = $_SESSION['cpf_user'];
                
            ?>

            <section class="section-informacoes">
                <h1>Dados Pessoais</h1>

                <form class="orcamento container" method="post" action="alterar_dados.php" >
                
                
                <div class="orcamento-dados form">
                    
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $nome;?>">
                    </div>
                    
                    <div>
                        <label for="CPF">CPF:</label>
                        <input type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" maxlength="14" value="<?php echo $Cpf_user; /* $dado['cpf']; */?>" readonly>
                        <script src="mascara_cpf.js"></script>
                    </div>
                    <div class="col-2">
                    <label for="date">Data de Nascimento:</label>
                    <input type="date" id="date" name="ddn" placeholder="xx/xx/xxxx" value = "<?php echo $dado['data_nascim'];?>" readonly>
                    </div>
                    <div class="col-2">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="cll" name="tel" placeholder="(xx) xxxxx-xxxx" maxlength="15" minlength="15" value = "<?php echo $dado['telefone_celular'];?>">
                    <script src="../siteFidel/java_script/mascara_tel.js"></script>
                    </div>
                    <div class="col-2">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="Email" placeholder="<?php $dado['nome']?>@gmail.com" value = "<?php echo $dado['email'];?>" readonly>
                    </div>
                    <div>
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="n_pass" value = "<?php echo $dado['n_senha'];?>" minlength="8" maxlength="20">
                    </div>
                
                    
                <h2 class="font-1-xxlcor-0">Endereço:</h2> 
                <br>
                    <div class="col-2">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" id="logradouro" name="rua" placeholder="Exemplo: Nome da rua, Bairro " maxlength="30" value = "<?php echo $dado['rua'];?>">
                    </div>
                    <div>
                    <label for="numero">Número:</label>
                    <input type="text" id="numero" name="comp" placeholder="xxx" value = "<?php echo $dado['complemento'];?>">
                    </div>
                
                    
                    <div>
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="city" placeholder="Exemplo: São Paulo" maxlength="25" value = "<?php echo $dado['cidade'];?>">
                    </div>
                
                    <div class="col-2">
                    <label for="estado">Estado:</label>
                    <select id="select_est" name="Est" required>
                            <option><?= $dado['UF_estado_usuario']; ?></option>
                            <option value="1">Acre</option>
                            <option value="2">Alagoas</option>
                            <option value="3">Amapá</option>
                            <option value="4">Amazonas</option>
                            <option value="5">Bahia</option>
                            <option value="6">Ceará</option>
                            <option value="7">Distrito Federal </option>
                            <option value="8">Espírito Santo</option>
                            <option value="9">Goiás</option>
                            <option value="10">Maranhão</option>
                            <option value="11">Mato Grosso</option>
                            <option value="12">Mato Grosso do Sul</option>
                            <option value="13">Minas Gerais</option>
                            <option value="14">Pará</option>
                            <option value="15">Paraíba</option>
                            <option value="16">Pernambuco</option>
                            <option value="17">Piauí</option>
                            <option value="18">Rio de Janeiro</option> 
                            <option value="19">Rio Grande do Norte</option>
                            <option value="20">Rio Grande do Sul</option>
                            <option value="21">Rondônia</option>
                            <option value="22">Roraima</option>
                            <option value="23">Santa Catarina</option>
                            <option value="24">São Paulo</option>
                            <option value="25">Sergipe</option>
                            <option value="26">Tocantins</option>
                    </select>
                    </div>
                </div>

                    <div class="botaopai">
                    <input class="botao1" type="submit" name="edit" value="Atualizar"></input>
                </div>

                <?php
                }
                ?>

        </form>

      
            </section>


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