<?php
include "config.php";

$login = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT id FROM login WHERE login = '$login'";
$query = $mysqli->query($sql);
$total = $query->num_rows;

if($total==1){

    $sql2 = "SELECT id FROM login WHERE login = '$login' and senha = '$senha'";
    $query2 = $mysqli->query($sql2);
    $total2 = $query2->num_rows;

    if($total2==1){
        echo "<script>alert('Usuário ok');</script>";
    }else{
        echo "<script>alert('Verifique sua senha');
        window.location.href=('../index.php');</script>";
    }
}else{
    echo "<script>alert('Verifique seu login');
    window.location.href=('../index.php');</script>";
}

?>