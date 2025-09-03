<?php
$prob = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jugadas = (int)$_POST['jugadas'];
    $p_uno = 1 / 1221759; // probabilidad de un solo juego
    $prob = 1 - pow(1 - $p_uno, $jugadas);
    $prob = round($prob * 100, 8); // porcentaje con 8 decimales
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_lab</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="/php/index.php">INICIO</a>
            <a href="/php/tablas.php">TABLAS</a>
            <a href="/php/cincoDeOro.php">5 DE ORO</a>
            <a href="/php/factorial.php">FACTORIAL</a>
        </nav>
    </header>

    <main>
        <form method="post" onsubmit="return validar()">
            <h2>Cantidad de jugadas: </h2>
            <input type="number" id="jugadas" name="jugadas">
            <button type="submit" value="Calcular">Calcular</button>
        </form>

    <?php if($prob > 0): ?>
        <p>Tu probabilidad de ganar al menos una vez es: <strong><?php echo $prob; ?>%</strong></p>
    <?php endif; ?>

    </main>
  <!-- Importar el JS externo -->
  <script src="/js/cincoDeOro.js"></script>
</body>
</html>