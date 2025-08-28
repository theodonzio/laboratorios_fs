<?php
$resultado = "";
if($_SERVER['REQUEST_METHOD']==='POST'){
    $ci7 = preg_replace('/\D+/', '', $_POST['ci_gen']);
    if(strlen($ci7)==7){
        $factores = [2,9,8,7,6,3,4];
        $suma = 0;
        for($i=0; $i<7; $i++){ $suma += $ci7[$i]*$factores[$i]; }
        $dv = (10 - ($suma % 10)) % 10;
        $resultado = "CI completa: $ci7$dv (DV: $dv)";
    } else {
        $resultado = "Debe ingresar 7 dígitos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Generar DV</title></head>
<link rel="stylesheet" href="style.css">
<body>
<div class="container">
<h2>Parte 2: Generar DV</h2>
<form method="post">
    <input type="text" name="ci_gen" placeholder="7 dígitos">
    <button type="submit">Generar</button>
</form>
<p><?php echo $resultado; ?></p>
<a href="index.php">Volver</a>
</div>
</body>
</html>