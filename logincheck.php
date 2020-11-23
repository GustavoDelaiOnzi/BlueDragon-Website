<?php

include "conexao.php"; 
$tbl_name="usuario"; // Table name 

// Connect to server and select databse.
mysqli_select_db($conn, "bluedragon")or die("cannot select DB");

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($conn, $sql);

$nome = array();
while($row = $result->fetch_assoc()){
    $nome[] = $row["nome"];
}

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['nome'] = $nome[0];
    header("Location: http://localhost/BlueDragon-website/index.html"); 
}
else{
    session_start();
    $_SESSION['loggedin'] = false;
    header("Location: http://localhost/BlueDragon-website/login.php?failed=1"); 
}
?>