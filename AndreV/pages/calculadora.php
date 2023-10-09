<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Calculadora</title>
</head>

<body>
 <h1>Calculadora</h1>
 <form action="resultado.php" method="post">
  <label for="valor1">Valor 1:</label>
  <input type="number" name="valor1" id="valor1" required><br><br>

  <label for="valor2">Valor 2:</label>
  <input type="number" name="valor2" id="valor2" required><br><br>

  <label for="operacao">Operação:</label>
  <select name="operacao" id="operacao" required>
   <option value="soma">Soma</option>
   <option value="subtracao">Subtração</option>
   <option value="multiplicacao">Multiplicação</option>
   <option value="divisao">Divisão</option>
  </select><br><br>

  <input type="submit" value="Calcular">
 </form>
</body>

</html>