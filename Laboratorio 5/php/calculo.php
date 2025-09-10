<?php
if (isset($_POST['btnObtener'])) {
    $nombre   = $_POST['name'];
    $ci       = $_POST['ci'];
    $city     = $_POST['city'];
    $dir      = $_POST['dir'];
    $tel      = $_POST['tel'];
    $mail     = $_POST['mail'];

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $nota5 = $_POST['nota5'];
    $nota6 = $_POST['nota6'];
    $nota7 = $_POST['nota7'];
    $nota8 = $_POST['nota8'];
    $nota9 = $_POST['nota9'];
    $nota10 = $_POST['nota10'];

    $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + $nota8 + $nota9 + $nota10) / 10;


    //deberia mejorarse la salida en HTML...

    
}
?>

