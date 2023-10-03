<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Media</title>
</head>
<body>
  <h1>Calculo da Média</h1>

  <form action="calcular_media.php" method="post">

    <label for="nota1">Nota 1:</label>
    <input type="number" id="nota1" name="nota1" step="0.1" required placeholder="Digite a nota 1"><br><br>

    <label for="nota2">Nota 2:</label>
    <input type="number" id="nota2" name="nota2" step="0.1" required placeholder="Digite a nota 2"><br><br>

    <label for="nota3">Nota 3:</label>
    <input type="number" id="nota3" name="nota3" step="0.1" required placeholder="Digite a nota 3"><br><br>

    <label for="nota4">Nota 4:</label>
    <input type="number" id="nota4" name="nota4" step="0.1" required placeholder="Digite a nota 4"><br><br>

    <input type="submit" value="Calcular Media">

  </form>

</body>
</html>