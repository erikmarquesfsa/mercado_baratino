<?php
$login = $_POST['email'];
$senha = $_POST['senha'];

if($login=="teste"){

    if($senha=="1234"){
        echo "Usuário ok!";
    }else{
        echo "Verique sua senha";
    }
}else{
    echo "Verifique seu usuário";
}

?>