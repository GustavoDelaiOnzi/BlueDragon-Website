<?php
    include 'conexao.php';
    $sql = "SELECT * from teclado";
    $result = mysqli_query($conn, $sql);
    $nomes = array();
    $precos = array();
    $id = array();
    while($row = $result->fetch_assoc()){
        $nomes[] = $row["nome"];
        $precos[] = $row["preco"];
        $id[] = $row["id_teclado"];
        $descricao[] = $row["descricao"];
        $teclado_path[] = $row["teclado_path"];
    }
?>z