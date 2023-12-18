<?php
              
if(isset($_POST['edit'])){

  include('conectaBD.php');
  include('protect.php'); 

  $email = $_SESSION['email'];
  $senha = $_SESSION['senha'];
  $senha_at = $_POST['n_pass'];
  $nome_at  = mysqli_real_escape_string($conexao, $_POST['nome'] );
  $telefone_at = $_POST['tel'];
  $endereco_at = $_POST['rua'];
  $complemento_at = mysqli_real_escape_string($conexao, $_POST['comp']);
  $cidade_at = $_POST['city'];
  $estado_at = $_POST['Est'];

        
  switch($estado_at){
          
        case '1':
          $estado_at = "AC";
        break;

        case '2':
          $estado_at = "Al";
        break;

        case '3':
          $estado_at = "AP";
        break;

        case '4':
          $estado_at = "AM";
        break;

        case '5':
          $estado_at = "BA";
        break;

        case '6':
          $estado_at = "CE";
        break;

        case '7':
          $estado_at = "DF";
                    break;

        case '8':
          $estado_at = "ES";
        break;

        case '9':
          $estado_at = "GO";
        break;

        case '10':
          $estado_at = "MA";
        break;

        case '11':
          $estado_at = "MT";
          break;

        case '12':
          $estado_at = "MS";
          break;

        case '13':
          $estado_at = "MG";
        break;

        case '14':
          $estado_at = "PA";
        break;

        case '15':
          $estado_at = "PB";
        break;

        case '16':
          $estado_at = "PE";
        break;

        case '17':
          $estado_at = "PI";
        break;

        case '18':
          $estado_at = "RJ";
        break;

        case '19':
          $estado_at = "RN";
        break;

        case '20':
          $estado_at = "RS";
        break;

        case '21':
          $estado_at = "RO";
        break;

        case '22':
          $estado_at = "RR";
        break;

        case '23':
          $estado_at = "SC";
        break;
          
        case '24':
          $estado_at = "SP";
        break;

        case '25':
          $estado_at = "SE";
        break;

        case '26':
          $estado_at = "TO";
        break;
    }

  }
    

  $sql_l = "SELECT * FROM Usuario WHERE email = '$email' AND n_senha = '$senha'";

  $sql_query = $conexao->query($sql_l) or die("Erro na execuçãodo SQL: " .$conexao->error);
    
  $login = $sql_query->num_rows;
    
  if($login == 1){
                                    
    while($user = mysqli_fetch_assoc($sql_query)){
      $nome = $user['nome'];
      //$senha = $user['senha'];
      $cpf = $user['cpf'];
    }
  }
    
  $sql = "UPDATE Usuario SET nome = '$nome_at', n_senha = '$senha_at', telefone_celular = '$telefone_at', rua = '$endereco_at', complemento = '$complemento_at', cidade = '$cidade_at', UF_estado_usuario = '$estado_at' WHERE email = '$email'";
  //finalizacao

  $instrucao = mysqli_query($conexao,$sql);

  //teste

  if(!$instrucao){
    die(' Query Inválida: ' . mysqli_error($conexao));
  }else{

    mysqli_close($conexao);
    echo "<br>dados alterados com sucesso!";
    //header('location: perfil.php');
    
  }


   if($senha != $senha_at){
        header('location: login.php');
   }else{
    $senha = $_SESSION['senha'];
    header('location: perfil.php');
   }
   





?>