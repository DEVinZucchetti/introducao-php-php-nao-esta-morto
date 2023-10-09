<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Calculadora de Média</title>
</head>

<body>
 <h1>Calculadora de Média</h1>
 <form action="calcular_media.php" method="POST">
  <label for="nota1">Nota 1:</label>
  <input type="number" name="nota1" required><br>

  <label for="nota2">Nota 2:</label>
  <input type="number" name="nota2" required><br>

  <label for="nota3">Nota 3:</label>
  <input type="number" name="nota3" required><br>

  <label for="nota4">Nota 4:</label>
  <input type="number" name="nota4" required><br>

  <input type="submit" value="Calcular Média">
 </form>
</body>

</html>