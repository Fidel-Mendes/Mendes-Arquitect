<?php
if(!isset($_SESSION)){
    session_start();
}

if(isset($_GET['email']) && !empty($_GET['email'])){

    $nome = addslashes($_GET['first_name']);
    $assunto = addslashes($_GET['tipo-arquitetura']);
    $email = addslashes($_GET['email']);
    $mensagem = addslashes($_GET['message']);

    $to = $email; 

    $subject = "Contato - MendesArquitect";

    $body = "Nome: $nome"."\r\n". 
            "Assunto: $assunto"."\r\n". 
            "Email: $email"."\r\n".
            "Mensagem: $mensagem";

    $header = "From:MendesArquitect@outlook.com"."\r\n"
    ."Reply-To:". $email."\e\n"
    ."X=Mailer:PHP/".phpversion();

    $reply = "";

    if(mail($to,$subject,$body,$header)){
        $_SESSION['sucessoenvio'] = true;
        header('location: contato.php');
    

?>





<?php

}else{
    $_SESSION['falhamensagem'] = true;
    header('location: contato.php');
    

}
}
?>



