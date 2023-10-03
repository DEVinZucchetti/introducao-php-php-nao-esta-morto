<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora IMC</title>
</head>
<body>
  <h1>IMC</h1>
  <form action="calcular_imc.php" method="post">
    <label for="peso">Peso(kg)</label>
    <input type="number" id="peso" name="peso" step="0.01" placeholder="Digite seu peso" required><br><br>

    <label for="altura">Altura(metros):</label>
    <input type="number" id="altura" name="altura" step="0.01" placeholder="Digite sua altura" required><br><br>

    <input type="submit" value="Calcular">

  </form>
</body>
</html>