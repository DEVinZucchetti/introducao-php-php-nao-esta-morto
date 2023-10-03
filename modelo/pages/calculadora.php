<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Calculadora</h1>
  <form action="resultado.php" method="POST">
    <label for="valor1">1º número</label>
    <input type="number" name="valor1" id="valor1" required>
    <br><br>
    <label for="valor2">2º número</label>
    <input type="number" name="valor2" id="valor2" required>
    <br><br>
    <label for="operacao">Selecione a operação</label>
    <select name="operacao" id="operacao" required>
      <option value="soma">Soma (+)</option>
      <option value="subtracao">Subtração (-)</option>
      <option value="multiplicacao">Multiplicação (*)</option>
      <option value="divisao">Divisão (/)</option>
    </select>
    <br><br>
    <button type="submit">Calcular</button>
  </form>
</body>
</html>