<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Operaciones Básicas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Operaciones Básicas</h2>
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
  <a href="index.php">Volver al menú</a>
</body>
</html>
