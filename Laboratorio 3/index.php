<?php
// ----------- FUNCIONES ----------- //
function convertirBases($numero, $baseOrigen) {
    $decimal = base_convert($numero, $baseOrigen, 10);

    return [
        "decimal" => $decimal,
        "binario" => base_convert($numero, $baseOrigen, 2),
        "octal" => base_convert($numero, $baseOrigen, 8),
        "hexadecimal" => strtoupper(base_convert($numero, $baseOrigen, 16))
    ];
}

function calcular($num1, $num2, $base, $operacion) {
    $n1 = base_convert($num1, $base, 10);
    $n2 = base_convert($num2, $base, 10);

    switch ($operacion) {
        case "suma": $res = $n1 + $n2; break;
        case "resta": $res = $n1 - $n2; break;
        case "multiplicacion": $res = $n1 * $n2; break;
        case "division": 
            $res = $n2 != 0 ? intdiv($n1, $n2) : "Error: división por cero"; 
            break;
        default: $res = 0;
    }

    if (!is_numeric($res)) return $res;

    return [
        "decimal" => $res,
        "binario" => base_convert($res, 10, 2),
        "octal" => base_convert($res, 10, 8),
        "hexadecimal" => strtoupper(base_convert($res, 10, 16))
    ];
}

// ----------- PROCESAMIENTO ----------- //
$resultadoConversor = null;
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["accion"] === "convertir") {
    $numero = $_POST["numero"];
    $base = $_POST["base"];
    $resultadoConversor = convertirBases($numero, $base);
}

$resultadoCalc = null;
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["accion"] === "calcular") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $base = $_POST["base"];
    $operacion = $_POST["operacion"];
    $resultadoCalc = calcular($num1, $num2, $base, $operacion);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor y Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Conversor y Calculadora de Bases Numéricas</h2>

    <div class="container">
        <!-- Conversor -->
        <div class="card">
            <h3>Conversor de bases</h3>
            <form method="post">
                <input type="hidden" name="accion" value="convertir">
                Número: <input type="text" name="numero" required>
                <select name="base">
                    <option value="10">Decimal</option>
                    <option value="2">Binario</option>
                    <option value="8">Octal</option>
                    <option value="16">Hexadecimal</option>
                </select>
                <button type="submit">Convertir</button>
            </form>
            <?php if (!empty($resultadoConversor)): ?>
                <h4>Resultados:</h4>
                <ul>
                    <li>Decimal: <?= $resultadoConversor["decimal"] ?></li>
                    <li>Binario: <?= $resultadoConversor["binario"] ?></li>
                    <li>Octal: <?= $resultadoConversor["octal"] ?></li>
                    <li>Hexadecimal: <?= $resultadoConversor["hexadecimal"] ?></li>
                </ul>
            <?php endif; ?>
        </div>

        <!-- Calculadora -->
        <div class="card">
            <h3>Calculadora entre bases</h3>
            <form method="post">
                <input type="hidden" name="accion" value="calcular">
                Número 1: <input type="text" name="num1" required>
                Número 2: <input type="text" name="num2" required>
                Base:
                <select name="base">
                    <option value="10">Decimal</option>
                    <option value="2">Binario</option>
                    <option value="8">Octal</option>
                    <option value="16">Hexadecimal</option>
                </select>
                Operación:
                <select name="operacion">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
                <button type="submit">Calcular</button>
            </form>
            <?php if (!empty($resultadoCalc) && is_array($resultadoCalc)): ?>
                <h4>Resultados:</h4>
                <ul>
                    <li>Decimal: <?= $resultadoCalc["decimal"] ?></li>
                    <li>Binario: <?= $resultadoCalc["binario"] ?></li>
                    <li>Octal: <?= $resultadoCalc["octal"] ?></li>
                    <li>Hexadecimal: <?= $resultadoCalc["hexadecimal"] ?></li>
                </ul>
            <?php elseif (is_string($resultadoCalc)): ?>
                <p><?= $resultadoCalc ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

