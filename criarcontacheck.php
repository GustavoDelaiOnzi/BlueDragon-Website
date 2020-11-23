<?php

include "conexao.php"; 

$username=$_POST['username']; 
$password=$_POST['password'];
$nome = $_POST['nome'];
$confirm=$_POST['confirm']; 

if ($confirm !== $password){
    header("Location: http://localhost/BlueDragon-website/criarconta.php?diferente=1"); 
} 

elseif (strlen($username)<6) {
    header("Location: http://localhost/BlueDragon-website/criarconta.php?username_short=1");
} 

elseif(strlen($password)<6) {
    header("Location: http://localhost/BlueDragon-website/criarconta.php?password_short=1");
}

else{
    $sql = "INSERT INTO usuario (username, password, nome)
    VALUES ('$username', '$password', '$nome')";


    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/BlueDragon-website/login.php"); 
    } else {
        header("Location: http://localhost/BlueDragon-website/criarconta.php?erro=1"); 
    }
}
?>