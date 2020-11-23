<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="styles/teclado-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="jquery-3.5.1.js"></script>
</head>
<body>
    <div id="nav" class="container"></div>
    <script>$( "#nav" ).load( "nav.php" );</script>
    <div class="produto" id="id_produto">
        <div class="produto-header">
            <h3>Mouses</h3>
            <p>As melhores opções de Custo x Benefício: design, performance e
               recursos pra quem quer detonar nos Games - a BlueDragon tem a
               opção certa para você.</p>
        </div>
        <?php
        include 'mousesql.php';
        
        $pagina = 1;
        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        }

        $max_index = (($pagina-1)*8)+8;
        if($max_index>count($nomes)){
            $max_index = count($nomes);
        }

        $items_na_linha = 0;
        echo "<div class='produto-imagem-wrapper'>";
            for ($i=($pagina-1)*8;$i < $max_index;$i++){
                if ($items_na_linha>=4){
                    echo "</div>";
                }
                if ($items_na_linha>=4){
                    echo "<div class='produto-imagem-wrapper'>";
                    $items_na_linha = 0;
                }
                    echo "<div class='produto-imagem'>";
                    echo "<a href=./compra.php?id_mouse='".$id[$i]."'>";
                    echo "<img src='imagens/mouse/".$mouse_path[$i]."'>";
                    echo "</a>";
                    echo "<div class='nome'>".$nomes[$i]."</div>";
                    echo "<div class='preco'>R$".$precos[$i]."</div>";
                    echo "</div>";
                $items_na_linha += 1;
            }
        echo "</div>";
        echo "<div class='botoes'>";
            $numero_botoes = (count($nomes)/8)+1;
            for($i=1;$i < $numero_botoes; $i++){
                echo "<form action = '' method='get'>";
                echo "<button type='submit' name='pagina' value='".$i."'>".$i."</button>";
                echo "</form>";
            }
            echo "</div>";
        ?>
    </div>
</body>
</html>