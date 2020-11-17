<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <div class="compra">
    <?php
    include 'nav.php';
    include 'conexao.php';
    if(isset($_GET['id_teclado'])){
        $teclado = $_GET['id_teclado'];
    }
    $sql = "SELECT * from Produto where id_produto=$teclado";
    $result = mysqli_query($conn, $sql);
    $nomes = array();
    $precos = array();
    while($row = $result->fetch_assoc()){
        $nomes[] = $row["nome"];
        $precos[] = $row["preco"];
    }
    $string_nome = "$nomes[0]";
    echo "<div class='compra-wrapper'>";
    echo "<div class='compra-nome'>";
    echo $nomes[0];
    echo "</div>";
    echo "<div class='compra-preco'>";
    echo "R$".$precos[0];
    echo "</div>";
    echo "<img class='compra-imagem' src='imagens/teclado/".$nomes[0].".jpg'>";
    echo "<div class='descricao'>";
    echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem beatae, explicabo corporis
     assumenda obcaecati hic maxime aspernatur a. Asperiores laborum eius esse aut mollitia suscipit 
     quasi placeat rem sequi necessitatibus.";
    echo "</div>";
    echo "<form method='get' action='compra_efetuada.php'>";
    echo "<button type='submit' name='nome' value=".$nomes[0]." class='compra-botao'>Comprar ".$nomes[0]."</button>";
    echo "</form>";
    echo "</div>";
    ?>
    </div>
    <script src="script.js"></script>
</body>
</html>