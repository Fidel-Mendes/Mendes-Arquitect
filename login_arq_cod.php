<?php

if(!isset($_SESSION)){
   session_start();
}

    include('conectaBD.php');

                        
         if(isset($_POST['entrar'])){
          $email = $conexao->real_escape_string($_POST['email']);
          $senha = $conexao->real_escape_string($_POST['senha']);
    
             $sql_l = "SELECT * FROM Arquiteto WHERE email = '$email' AND n_pass = '$senha'";
             $sql_query = $conexao->query($sql_l) or die("Erro na execuçãodo SQL: " .$conexao->error);
    
                $login = $sql_query->num_rows;
    
            if($login == 1){
                                    
                 $user = $sql_query->fetch_assoc();
    
                if(!isset($_SESSION)){
                  session_start();
                                    }
             $_SESSION['senha'] = $senha;
             $_SESSION['email'] = $email;
             
             /* echo $_SESSION['email'];  */   
                header("Location: arquitetos_perfil.php");
    
         }else{
            $_SESSION['falhalogin'] = true;
            header("Location: login_arquitetos.php");
 
          
                        
?>  
<?php
         }
    }
?>