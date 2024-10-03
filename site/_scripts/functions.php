<?php

function dadosUser($email){
    include 'config.php';
    $sql = "SELECT * FROM login WHERE login = '$email'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados;
}


?>