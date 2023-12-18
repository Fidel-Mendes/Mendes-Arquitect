<?php

        if(isset($_SESSION)){
          session_start();
        }
            
            if(isset($_POST['Cadastrar-se'])){
                
                include_once("conectaBD.php");

                //campos

                $email = $_POST['Email'];
                $senha = $_POST['n_pass'];
                $cpass = $_POST['c_pass'];
                $Cpf = $_POST['cpf'];
                $Nome = mysqli_real_escape_string($conexao, $_POST['nome']);
                $d_cau = $_POST['Cau'];
                $Telefone_celular = $_POST['cll'];
                //especialidade_arq
                $Area = @$_POST['espec'];
                $especialidade = ['nulo','Arquiteto Urbano','Arquiteto Residencial','Arquiteto Comercial','Design Interiores','Arquiteto Geral'];

                $pesquisa = "SELECT *FROM Arquiteto WHERE Registro_CAUBR = '$d_cau'";

                $sql_query = $conexao->query($pesquisa) or die("Erro na execuçãodo SQL: " .$conexao->error);
    
                $con = $sql_query->num_rows;

                // ação sql

                
                if($d_cau == "A170728-0" || $d_cau == "B170728-0" || $d_cau == "C170728-0" || $d_cau == "D170728-0" || $d_cau == "E170728-0"){

                      if ($cpass == $senha) {

                        if($con != 1){
                             //especialidade do arquiteto
                        if($Area != ''){

                            switch($Area){
                              case '1':
                                $Area = 1;
                                $Aux = 1;
                                $especialidadeF = $especialidade[$Area];
                                break;
  
                              case '2':
                                $Area = 2;
                                $Aux = 1;
                                $especialidadeF = $especialidade[$Area];
                                break;
  
                              case '3':
                                $Area = 3;
                                $Aux = 2;
                                $especialidadeF = $especialidade[$Area];
                                break;
  
                              case '4':
                                $Area = 4;
                                $Aux = 3;
                                $especialidadeF = $especialidade[$Area];
                                break;  

                                case '5':
                                  $Area = 5;
                                  $Aux = 4;
                                  $especialidadeF = $especialidade[$Area];
                                  break;  
                             }
  
                        }else{
                        }
                        //fim especialidade arquiteto
  
                          $sql = "INSERT INTO Arquiteto(cpf,nome,telefone_celular,email,n_pass,id_Espec_Arquiteto,Registro_CAUBR) VALUES ('$Cpf','$Nome','$Telefone_celular','$email','$senha','$Area','$d_cau')";
                         /*  $sql1 = "INSERT INTO Especializacao_Arq (Nome_Especialidade) VALUES ('$especialidade[$Area]')"; */
                        
                        //executando instrução
                        $instrucao = mysqli_query($conexao,$sql);
                        
        
                        //concluindo operação e testando erros
                        if(! $instrucao /* || !$instrucao2 */){
                            die(' Query Inválida: ' . mysqli_error($conexao));
                                   }else{
                            mysqli_close($conexao);
                            /* echo "<br>Arquiteto cadastrado com sucesso!"; */
                            $_SESSION['sucesso'] = TRUE;
                            header('location: login_arquitetos.php');
                          }
                           }else{
                            /* echo "Este CAU já está em uso"; */
                            $_SESSION['cau-use'] = TRUE;
                            header('location: cadastro_arquitetos.php');
                        }

                       
                      //fim da conclusão de operação
                    } else{
                      /* echo "as senhas não coincidem";  */
                      $_SESSION['senha-false'] = TRUE;
                      header('location: cadastro_arquitetos.php');
                    }
                  }else{
                  /* echo "Número de Cau Inválido!"; */
                  $_SESSION['invalidCAU'] = TRUE;
                  header('location: cadastro_arquitetos.php');
                }                
            }                   
        ?>