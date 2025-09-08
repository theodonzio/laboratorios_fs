<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Operaciones Básicas</title>
  <link rel="stylesheet" href="../Laboratorio 6/style.css">
</head>

<header>
  <a href="../Laboratorio 6/index.php"><button class=regresar>Regresar</button></a>
</header>

<body>
  <h2>Operaciones Básicas</h2>
  <div class="primerapp">
  <form action="calculos.php" method="post">
    <label>Número 1:</label>
    <input type="number" name="numero1" required>
    
    <label>Número 2:</label>
    <input type="number" name="numero2" required>
    
    <select name="operacion" required>
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicación</option>
      <option value="division">División</option>
    </select>
    
    <button type="submit" name="calcular">Calcular</button>
  </form>

  </div>
</body>
</html>
