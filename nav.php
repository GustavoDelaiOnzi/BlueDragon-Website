<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $login = $_SESSION['nome'];
    } else {
        $login = "Login";
    }
?>
<link rel="stylesheet" href="styles/nav-styles.css">
<div class="botao-menu">
    <div class="linha linha-1"></div>
    <div class="linha linha-2"></div>
    <div class="linha linha-3"></div>
</div>
<section class="barra-lateral">
    <ul class="menu">
        <li class="item-menu">
            <a href="index.html" class="link-menu">Home</a>
        </li>
        <li class="item-menu">
            <a href="teclado.php" class="link-menu">Teclados</a>
        </li>
        <li class="item-menu">
            <a href="mouse.php" class="link-menu">Mouses</a>
        </li>
        <li class="item-menu">
            <?php 
            echo "<a href='login.php' class='link-menu'>".$login."</a>";
            ?>
        </li>
    </ul>
    <div class="redes-sociais">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
</section>
<script src="script.js"></script>