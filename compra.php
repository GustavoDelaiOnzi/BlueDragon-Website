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
    <script>$( "#nav" ).load( "nav.html" );</script>
</head>
<body>
    <div id="nav" class="container"></div>
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
        $descricao[] = $row["descricao"];
        $teclado_path[] = $row["teclado_path"];
    }
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
            echo "<img class='compra-imagem' src='imagens/teclado/".$teclado_path[0]."'>";
            ?>
        </div>
        <div class='descricao'>
            <?php
            echo $descricao[0];
            ?>
        </div>
        <form method='get' action='compra-efetuada.php'>
            <?php
            echo "<button type='submit' name='nome' value=".$nomes[0]." class='compra-botao'>Comprar ".$nomes[0]."</button>";
            ?>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>