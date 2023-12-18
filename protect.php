<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    /* die("Você não está logado, portanto não pode acessar a página.<p><a href=\"login.php\">Login</a></p>"); */
}
?>