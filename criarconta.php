<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="styles/login-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="jquery-3.5.1.js"></script>
</head>
<body>
    <div id="nav" class="container"></div>
    <script>$( "#nav" ).load( "nav.php" );</script>

    <div class="form-wrapper">
      <form action="criarcontacheck.php" method="post">
      
        <div class="container">
          <label for="uname"><b>Usuário</b></label>
          <input type="text" placeholder="Usuário" value="" name="username" required>

          <label for="nome"><b>Nome</b></label>
          <input type="text" placeholder="Nome" value="" name="nome" required>
      
          <label for="psw"><b>Senha</b></label>
          <input type="password" placeholder="Senha" value="" name="password" required>

          <label for="pswr"><b>Confirme a senha</b></label>
          <input type="password" placeholder="Confirme a senha" value="" name="confirm" required>
      
          <button type="submit" name="commit" value="criar">Criar Conta</button>
        </div>
      </form> 
    </div>
    <?php
    if (isset($_GET['diferente']) && $_GET['diferente']==1) {
        echo "<div class='failed'>Essas senhas não coincidem. Tente de novo.</div>";
    }
    if (isset($_GET['username_short']) && $_GET['username_short']==1) {
      echo "<div class='failed'>Usuário curto. Tente de novo.</div>";
    }
    if (isset($_GET['password_short']) && $_GET['password_short']==1) {
      echo "<div class='failed'>Senha curta. Tente de novo.</div>";
    }
    ?>
</body>
</html>