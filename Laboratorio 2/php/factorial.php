<?php

function factorial($n) {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}

$resultado = null;

if (isset($_POST['numero'])) {
    $num = (int)$_POST['numero'];
    if ($num >= 0) {
        $resultado = factorial($num);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_lab</title>
    <link rel="stylesheet" href="../../Laboratorio 6/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="../../Laboratorio 6/index.php"><button class=regresar>Regresar</button></a>
    </header>

    <main>
    <h2>Factorial</h2>


        <form id="formFactorial" method="post">
            <label><h3>Ingresa un numero:</h3></label>
            <input type="number" name="numero" id="numero" required>
            <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <h3>Resultado:</h3>
        <p><?php echo $resultado; ?></p>
    <?php endif; ?>
    </main>

    <script src="/js/factorial.js"></script>
</body>
</html>
