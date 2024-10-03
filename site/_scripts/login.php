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
        echo "<script>
                Swal.fire('SweetAlert2 is working!');
            </script>";
    }else{
        echo "<script>alert('Verifique sua senha');
        window.location.href=('../index.php');</script>";
    }
}else{
    echo "<script>alert('Verifique seu login');
    window.location.href=('../index.php');</script>";
}
?>
</body>
</html>