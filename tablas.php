<?php
//metodo que recibe un numero (n) y hace iteraciones para cada calculo del 1 al 10, devuelve un array con todas las operaciones
class Tablas {
    public static function generar($n) {
        $resultado = [];
        for ($i = 1; $i <= 10; $i++) {
            $resultado[] = "$n x $i = " . ($n * $i);
        }
        return $resultado;
    }
}
$tabla = null;
$n = null;
//generacion de la tabla por POST
if (isset($_POST["numero"])) {
    $n = (int)$_POST["numero"];
    $tabla = Tablas::generar($n);
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
        <h1>Tablas de multiplicar</h1>

    <form method="POST" onsubmit="return validarNumero();">
        <label><h3>Ingrese un numero:</h3></label>
        <input type="text" name="numero" id="numero" required>
        <button type="submit">Generar</button>
    </form>

    <!--genra un listado con li-->
    <?php if ($tabla !== null): ?>
        <h2>Tabla del <?= $n ?></h2>
            <ul>
                <?php foreach ($tabla as $linea): ?>
                    <li><?= $linea ?></li>
                <?php endforeach; ?>
            </ul>
    <?php endif; ?>

    </main>

    <script src="/js/tablas.js" defer></script>
</body>
</html>