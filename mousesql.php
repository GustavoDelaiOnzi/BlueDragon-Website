<?php
    include 'conexao.php';
    $sql = "SELECT * from Mouse";
    $result = mysqli_query($conn, $sql);
    while($row = $result->fetch_assoc()){
        $nomes[] = $row["nome"];
        $precos[] = $row["preco"];
        $id[] = $row["id_mouse"];
        $descricao[] = $row["descricao"];
        $mouse_path[] = $row["mouse_path"];
    }
?>