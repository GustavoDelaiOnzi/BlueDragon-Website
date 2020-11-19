<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="styles/compra-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="jquery-3.5.1.js"></script>
</head>
<body>
    <div id="nav" class="container"></div>
    <div class="compra">
    <?php
    include 'conexao.php';

    if(isset($_GET['id_teclado'])){
        $teclado = $_GET['id_teclado'];
    }

    $sql = "SELECT * FROM Produto WHERE id_produto=$teclado";
    $result = mysqli_query($conn, $sql);
    $nomes = array();
    $precos = array();
    while($row = $result->fetch_assoc()){
        $nomes[] = $row["nome"];
        $precos[] = $row["preco"];
    }
    $string_nome = "$nomes[0]";
    ?>
    <div class='compra-wrapper'>
        <div class='compra-nome'>
            <?php
            echo $nomes[0];
            ?>
        </div>
        <div class='compra-preco'>
            <?php
            echo "R$".$precos[0];
            ?>
        </div>
        <div>
            <?php
            echo "<img class='compra-imagem' src='imagens/teclado/".$nomes[0].".jpg'>";
            ?>
        </div>
        <div class='descricao'>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem beatae, explicabo corporis
            assumenda obcaecati hic maxime aspernatur a. Asperiores laborum eius esse aut mollitia suscipit 
            quasi placeat rem sequi necessitatibus.
        </div>
        <form method='get' action='compra-efetuada.php'>
            <?php
            echo "<button type='submit' name='nome' value=".$nomes[0]." class='compra-botao'>Comprar ".$nomes[0]."</button>";
            ?>
        </form>
        </div>
    </div>
    <script>$( "#nav" ).load( "nav.html" );</script>
    <script src="script.js"></script>
</body>
</html>