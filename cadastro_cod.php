<?php

    if(!isset($_SESSION)){
        session_start();
    }
        
        if(isset($_POST['Cadastrar-se'])){
            
            include_once("conectaBD.php");
              
           function isCpf($Cpf){
            $Cpf = preg_replace("/[^0-9]/", "", $Cpf);
            $digitoUm = 0;
            $digitoDois = 0;
           

            for($i = 0, $x = 10; $i <= 8; $i++, $x--){
              $digitoUm += $Cpf[$i] * $x;/* substr($Cpf, $i, 1); */
            }
            for($i = 0, $x = 11; $i<= 9; $i++, $x--){
              if(str_repeat($i, 11) == $Cpf){
                return false;
              }
              $digitoDois += $Cpf[$i] * $x;
            }

            $calculoUm = (($digitoUm % 11) < 2) ? 0 : 11 - ($digitoUm % 11);
            $calculoDois = (($digitoDois % 11) < 2) ? 0 : 11 - ($digitoDois % 11);

            if($calculoUm <> $Cpf[9] || $calculoDois <> $Cpf[10]){
              return false;
            }
            return true;
           }
                  
            //campos

            $email = $_POST['Email'];
            $senha = $_POST['n_pass'];
            $cpass = $_POST['c_pass'];
            $Cpf = $_POST['cpf'];
            $Nome = mysqli_real_escape_string($conexao, $_POST['nome']);
            $Data_nascim = $_POST['ddn'];
            $Telefone_celular = $_POST['cll'];
            $Estado_usuario = $_POST['Est'];
            $Cidade = $_POST['city'];
            $Rua= $_POST['rua'];
            $complemento = mysqli_real_escape_string($conexao, $_POST['comp']); 

            $pesquisa = "SELECT *FROM Usuario WHERE cpf = '$Cpf'";

            $sql_query = $conexao->query($pesquisa) or die("Erro na execuçãodo SQL: " .$conexao->error);

            $con = $sql_query->num_rows;

            // ação sql

              if ($cpass == $senha) {

                if($con != 1){
                  
                  if(isCpf($Cpf)){
                    
                    switch($Estado_usuario){
                      case '1':
                        $Estado_usuario = "AC";
                      break;

                      case '2':
                        $Estado_usuario = "Al";
                      break;

                      case '3':
                        $Estado_usuario = "AP";
                      break;

                      case '4':
                        $Estado_usuario = "AM";
                       break;

                      case '5':
                        $Estado_usuario = "BA";
                      break;

                      case '6':
                        $Estado_usuario = "CE";
                      break;

                      case '7':
                        $Estado_usuario = "DF";
                                   break;

                      case '8':
                        $Estado_usuario = "ES";
                      break;

                       case '9':
                        $Estado_usuario = "GO";
                      break;

                      case '10':
                        $Estado_usuario = "MA";
                      break;

                      case '11':
                        $Estado_usuario = "MT";
                        break;

                      case '12':
                        $Estado_usuario = "MS";
                        break;

                      case '13':
                        $Estado_usuario = "MG";
                      break;

                      case '14':
                        $Estado_usuario = "PA";
                      break;

                      case '15':
                        $Estado_usuario = "PB";
                      break;

                       case '16':
                        $Estado_usuario = "PE";
                      break;

                      case '17':
                        $Estado_usuario = "PI";
                      break;

                      case '18':
                        $Estado_usuario = "RJ";
                      break;

                      case '19':
                        $Estado_usuario = "RN";
                      break;

                      case '20':
                        $Estado_usuario = "RS";
                      break;

                      case '21':
                        $Estado_usuario = "RO";
                      break;

                      case '22':
                        $Estado_usuario = "RR";
                      break;

                      case '23':
                        $Estado_usuario = "SC";
                      break;
                        
                      case '24':
                        $Estado_usuario = "SP";
                      break;

                      case '25':
                        $Estado_usuario = "SE";
                      break;

                      case '26':
                        $Estado_usuario = "TO";
                      break;
                  }

                    $sql = "INSERT INTO Usuario(cpf,nome,data_nascim,telefone_celular,email,n_senha,UF_estado_usuario,cidade,rua,complemento) VALUES ('$Cpf','$Nome','$Data_nascim','$Telefone_celular','$email','$senha','$Estado_usuario','$Cidade','$Rua','$complemento')";

                    /* $sql2 = "INSERT INTO Imagem_usuario (cpf_usuario) VALUES ('$Cpf')"; */
                  
                  //executando instrução
                  $instrucao = mysqli_query($conexao,$sql);
                    /* $instrucao2 = mysqli_query($conexao,$sql2); */
                  //concluindo operação e testando erros

                  if(! $instrucao){   
                      die (mysqli_error($conexao));
                  }else{
                      mysqli_close($conexao);
                     $_SESSION['user-log'] = TRUE;    
                     $_SESSION['true'] = TRUE;                
                     header('Location: login.php');
                     
                  }
                  }else{
                    /* echo "Número de CPF inválido"; */
                    $_SESSION['cpf-invalid'] = TRUE;
                    header('location: cadastro.php');
                  }
                  }else{
                    /* echo "Usuário com CPF já em uso"; */
                    $_SESSION['cpf-em-uso'] = TRUE;
                    header('location: cadastro.php');
                  }

              } else {
                /* $resposta = 'as senhas não coincidem';
                echo $resposta; */
                $_SESSION['senha-error'] = TRUE;
                header('location: cadastro.php');
              }
        }

?>