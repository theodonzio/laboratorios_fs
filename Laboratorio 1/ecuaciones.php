<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ecuaciones y Potencias</title>
  <link rel="stylesheet" href="../Laboratorio 6/style.css">
</head>
<body>

<header>
  <a href="../Laboratorio 6/index.php"><button class=regresar>Regresar</button></a>
</header>

  <h2>Ecuaciones y Potencias</h2>
  
  <!-- Fórmula de Bhaskara -->
  <h3>Ecuación Cuadrática</h3>
  <form action="calculos.php" method="post">
    <label>a:</label>
    <input type="number" name="a" required>
    <label>b:</label>
    <input type="number" name="b" required>
    <label>c:</label>
    <input type="number" name="c" required>
    <button type="submit" name="ecuacion">Resolver</button>
  </form>
  
  <!-- Raíz cuadrada -->
  <h3>Raíz Cuadrada</h3>
  <form action="calculos.php" method="post">
    <label>Número:</label>
    <input type="number" name="numero_raiz" required>
    <button type="submit" name="raiz">Calcular</button>
  </form>
  
  <!-- Potencias -->
  <h3>Potencia</h3>
  <form action="calculos.php" method="post">
    <label>Base:</label>
    <input type="number" name="base" required>
    <label>Exponente:</label>
    <input type="number" name="exponente" required>
    <button type="submit" name="potencia">Calcular</button>
  </form>
  

</body>
</html>
