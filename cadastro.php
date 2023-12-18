<?php

if(!isset($_SESSION)){
  session_start();
}

?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro | Mendes Arquitect</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/novos_usuarios.css">
        <link rel="stylesheet" href="css/componentes.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="icones/icone_navegador/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/icone_navegador/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/icone_navegador/favicon-16x16.png">

        <style>
          footer {
            margin-bottom: -38vh;
            margin-top: 5vh;
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
                    <a class="link-menu" href="login.php">Login</a>
                </nav>
            </div>
        </header>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    <main>
    <div class="titulo2">
      <div class="container">
        <h1 class="font-1-xxlcor-0 h1">Cadastre-se<span class="cor-p1">.</span></h1>
      </div>
    </div>

    <form class="orcamento container" method="post" action="cadastro_cod.php">
     
    <!-- dados -->
      
      <div class="orcamento-dados form">
        
        <div>
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" maxlength="50" required>
        </div>
        
        <div>
          <label for="CPF">CPF:</label>
          <input type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" maxlength="14" required>
          <script src="java_script/mascara_cpf.js"></script>
        </div>
        <div class="col-2">
          <label for="date">Data de Nascimento:</label>
          <input type="date" id="date" name="ddn" placeholder="xx/xx/xxxx" maxlegth="" required>
        </div>
        <div class="col-2">
          <label for="telefone">Telefone:</label>
          <input type="text" id="cll" name="cll" 
            placeholder="(xx) xxxxx-xxxx"
            maxlength="15" required>
          <script src="java_script/mascara_tel.js"></script>
        </div>
        <div class="col-3">
          <label for="email">Email:</label>
          <input type="text" id="email" name="Email" placeholder="seunome@gmail.com" maxlength="50" required>
        </div>
        <div>
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="n_pass" maxlength="20" minlength="8" required>
        </div>
        <div>
          <label for="senha">Confirme sua senha:</label>
          <input type="password" id="senha" name="c_pass" maxlength="20" minlength="8" required>
        </div>
        
       <h2 class="font-1-xxlcor-0">Endereço:</h2> 
       <br>
        <div class="col-2">
          <label for="logradouro">Rua:</label>
          <input type="text" id="logradouro" name="rua" placeholder="Exemplo: Nome da rua, Bairro" maxlength="30" required>
        </div>
        <div>
          <label for="numero">Complemento:</label>
          <input type="text" id="numero" name="comp" pattern="\[0-9]\*" placeholder="xxx" maxlength="25" required>
        </div>
       
        
        <div>
          <label for="cidade">Cidade:</label>
          <input type="text" id="cidade" name="city" placeholder="Exemplo: São Paulo" required maxlength="20">
        </div>
        <div class="col-2">
          <label for="select_est">Estado:</label>
          <select id="select_est" name="Est"required>
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
        <input class="botao" type="submit" name="Cadastrar-se" id="button"></input>
      </div>
    </form>

    <a class="cadastro-arquitetos" href="cadastro_arquitetos.php"><h2>Cadastro Arquitetos</h2></a>
  </main>
            <div class="erros">
                    <?php
                        if(isset($_SESSION['cpf-invalid'])):
                    ?>
                        <div class = "erro">
                            <p>Número de CPF Inválido!</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['cpf-invalid']);
                    ?>

                    <?php
                        if(isset($_SESSION['cpf-em-uso'])):
                    ?>
                        <div class = "erro">
                            <p>Número de CPF já cadastrado na base!</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['cpf-em-uso']);
                    ?>

                    <?php
                        if(isset($_SESSION['senha-error'])):
                    ?>
                        <div class = "erro">
                            <p>As senhas não coincidem!</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['senha-error']);
                    ?>
            </div>
                        

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
