<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
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
        echo "window.location.href=('../dashboard.php');</script>";
    }else{
    ?>
        <script language='javascript'>
            swal.fire({
                icon:"error",
                text:"Dados incorretos. Tente novamente :/",
                type:"success"
            }).then(okay=> {
                if(okay){
                    window.location.href=("../index.php");
                    
                }
            });
        </script>
<?php }
}else{?>
    <script language='javascript'>
        swal.fire({
            icon:"error",
            text:"Dados incorretos. Tente novamente :/",
            type:"success"
        }).then(okay=> {
            if(okay){
                window.location.href=("../index.php");
                
            }
        });
    </script>
<?php } ?>
</body>
</html>