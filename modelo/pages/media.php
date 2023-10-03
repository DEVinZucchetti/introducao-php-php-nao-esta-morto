<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Média</title>
</head>
<style>
  :root {
    font-family: sans-serif;
  }
</style>
<body>
  <h1>Média</h1>
  <p>Por favor, digite as notas do aluno(a)</p>
  <br>
  <form action="calcular_media.php" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <br><br>
    <label for="nota1">Nota 01</label>
    <input type="number" name="nota1" id="nota1" required>
    <br><br>
    <label for="nota2">Nota 02</label>
    <input type="number" name="nota2" id="nota2" required>
    <br><br>
    <label for="nota3">Nota 03</label>
    <input type="number" name="nota3" id="nota3" required>
    <br><br>
    <label for="nota4">Nota 04</label>
    <input type="number" name="nota4" id="nota4" required>
    <br><br>
    <button type="submit">Calcular</button>
  </form>
</body>
</html>