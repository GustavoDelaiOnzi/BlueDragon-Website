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
      <form action="logincheck.php" method="post">
      
        <div class="container">
          <label for="uname"><b>Usuário</b></label>
          <input type="text" placeholder="Usuário" value="" name="username" required>
      
          <label for="psw"><b>Senha</b></label>
          <input type="password" placeholder="Senha" value="" name="password" required>
      
          <button type="submit" name="commit" value="login">Login</button>
        </div>
      </form> 
    </div>
    <?php
    if (isset($_GET['failed']) && $_GET['failed']==1) {
        echo "<div class='failed'>Usuario ou senha errados</div>";
    }
    ?>
    <center><a href="criarconta.php" class="criarconta">Criar Conta</a></center>
</body>
</html>