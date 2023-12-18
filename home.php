<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>VOCÊ ESTÁ LOGADO, <?php echo $_SESSION['email'];?></h1>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>