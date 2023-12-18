<?php
        include ("conectaBD.php");
        if(isset($_FILES['arquivo'])) {
            $arquivo = $_FILES['arquivo'];
            
            
            if($arquivo['size'] > 2097152)
                die("Arquivo muito grande!! Max: 2MB");
            
            if($arquivo['error'])
                die("Falha ao enviar arquivo.");

            $pasta = "arquivos/";
            $nomedoarquivo = $arquivo['name'];
            $data_upload = @$arquivo['data_upload'];
            $novonomedoarquivo = uniqid();
            $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

            if($extensao != "jpg" && $extensao != "png")
                die("Tipo de arquivo não aceito");
            
            $path = $pasta . $novonomedoarquivo . "." . $extensao;
            $sucesso = move_uploaded_file($arquivo['tmp_name'], $path);
            if($sucesso){
                $conexao->query("INSERT INTO imagem (nome, caminho) VALUES ('$nomedoarquivo','$path')") or die ($conexao->error);
                echo "<p>Arquivo enviado com sucesso!</p>";
            } else
                echo "<p>Falha ao enviar arquivo</p>";
        }

            $sql_query = $conexao->query ("SELECT * FROM Imagem") or die ($conexao->error);
// 1024bytes = 1kb
// 1024kb = 1mb

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST" enctype="multipart/form-data" action="">
            <p><Label for="">Selecione o Arquivo</Label>
            <input name="arquivo" type="file"></p>
            <button name="upload" type="submit">Enviar Arquivo</button>
        </form>

        <table border="1" cellpadding="10">
                <thead>
                    <th>Arquivo</th>
                    <th>Data de Envio</th>
                    <th>Visualizar Imagem</th>
            </thead>
        <tbody>
            <?php
            $arquivo = $sql_query->fetch_array()
                // $nomedoarquivo = $arquivo['nome'];
                // $data_upload = $arquivo['data_upload'];
            ?>
            <tr>
                <td><?php echo $nomedoarquivo; ?></td>
                <td><?php echo date("d/m/Y H:i", $data_upload); ?></td>
                <td><?php echo "<p><a href=\"arquivos/$novonomedoarquivo.$extensao\">Clique aqui para visualizar a imagem</a></p>"; ?></td>
            </tr>
            <?php 
            ?>
            </tbody>
        </table>

</body>
</html>