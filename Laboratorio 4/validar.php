<?php
$resultado = "";
if($_SERVER['REQUEST_METHOD']==='POST'){
    $ci = preg_replace('/\D+/', '', $_POST['ci_val']);
    if(strlen($ci)==8){
        $factores = [2,9,8,7,6,3,4];
        $suma = 0;
        for($i=0; $i<7; $i++){ $suma += $ci[$i]*$factores[$i]; }
        $dv = (10 - ($suma % 10)) % 10;
        $resultado = ($ci[7] == $dv) ? "CI válida" : "CI inválida";
    } else {
        $resultado = "Debe tener 8 dígitos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Validar CI</title></head>
<link rel="stylesheet" href="../Laboratorio 6/style.css">
<body>


    <header>
        <a href="../Laboratorio 6/index.php"><button class=regresar>Regresar</button></a>
    </header>

<div class="container">
<h2>Parte 1: Validar CI</h2>
<form method="post">
    <input type="text" name="ci_val" placeholder="8 dígitos">
    <button type="submit">Validar</button>
</form>
<p><?php echo $resultado; ?></p>
</div>
</body>
</html>