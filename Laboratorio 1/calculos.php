<?php
class Calculadora {
    public function operar($n1, $n2, $operacion) {
        switch($operacion) {
            case "suma": return $n1 + $n2;
            case "resta": return $n1 - $n2;
            case "multiplicacion": return $n1 * $n2;
            case "division": return $n2 != 0 ? $n1 / $n2 : "No se puede dividir entre cero";
        }
    }

    public function area($figura, $d1, $d2 = 0) {
        switch($figura) {
            case "cuadrado": return $d1 * $d1;
            case "rectangulo": return $d1 * $d2;
            case "circunferencia": return pi() * pow($d1, 2);
            case "triangulo": return ($d1 * $d2) / 2;
        }
    }

    public function bhaskara($a, $b, $c) {
        $discriminante = pow($b, 2) - 4*$a*$c;
        if ($discriminante < 0) return "No tiene raíces reales";
        $x1 = (-$b + sqrt($discriminante)) / (2*$a);
        $x2 = (-$b - sqrt($discriminante)) / (2*$a);
        return "x1 = $x1 , x2 = $x2";
    }

    public function raiz($numero) {
        return sqrt($numero);
    }

    public function potencia($base, $exponente) {
        return pow($base, $exponente);
    }
}

$calc = new Calculadora();

// Operaciones básicas
if(isset($_POST["calcular"])) {
    $res = $calc->operar($_POST["numero1"], $_POST["numero2"], $_POST["operacion"]);
    echo "<div class='resultado'>Resultado: $res</div>";
}


// Áreas
if(isset($_POST["calcular_area"])) {
    $res = $calc->area($_POST["figura"], $_POST["dato1"], $_POST["dato2"]);
    echo "<div class='resultado'>Área: $res</div>";
}


// Ecuación cuadrática
if(isset($_POST["ecuacion"])) {
    echo "Resultado: ".$calc->bhaskara($_POST["a"], $_POST["b"], $_POST["c"]);
}

// Raíz
if(isset($_POST["raiz"])) {
    echo "Resultado: ".$calc->raiz($_POST["numero_raiz"]);
}

// Potencia
if(isset($_POST["potencia"])) {
    echo "Resultado: ".$calc->potencia($_POST["base"], $_POST["exponente"]);
}

echo "<br><a href='../Laboratorio 6/index.php'><button class=regresar>Regresar</button></a>";
?>
