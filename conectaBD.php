<?php

    //BANCO DE DADOS
    $hostname = "localhost";
    $bancodedados = "Mendes_Arquitect";
    $usuario = "root";
    $senha = "";
    //BANCO DE DADOS

    $conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);
/* 
    if($conexao -> connect_errno){
        echo "<br><br><br><br><br><br><br><br><br>Conexão falhou";
    }else{
        echo "<br><br><br><br><br><br><br><br>Conectado com sucesso";
    } 
*/
        
?>