<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cálculo de Áreas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Áreas de Figuras Geométricas</h2>
  
  <form action="calculos.php" method="post">
    <label>Seleccione figura:</label>
    <select name="figura" required>
      <option value="cuadrado">Cuadrado</option>
      <option value="rectangulo">Rectángulo</option>
      <option value="circunferencia">Circunferencia</option>
      <option value="triangulo">Triángulo</option>
    </select>
    
    <label>Dato 1:</label>
    <input type="number" name="dato1" required>
    
    <label>Dato 2 (si aplica):</label>
    <input type="number" name="dato2">
    
    <button type="submit" name="calcular_area">Calcular Área</button>
  </form>
  
  <a href="index.php">Volver al menú</a>
</body>
</html>
