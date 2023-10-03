<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>
<body>
  <h1>Calculadora</h1>

  <form action="resultado.php" method="post">

    <label for="valor">1° valor</label>
    <input type="number" id="valor1" name="valor1" step="any" placeholder="Digite o primeiro valor" required>

    <label for="operacao">Operação</label>
    <select id="opercao" name="operacao" required>
      <option value="soma">Soma</option>
      <option value="subtracao">Subtração</option>
      <option value="multiplicacao">Multiplicação</option>
      <option value="divisao">Divisão</option>
    </select>

    <label for="valor2">2° valor</label>
    <input type="number" id="valor2" name="valor2" step="any" placeholder="Digite o segundo valor" required>


    <input type="submit" value="Calcular">
  </form>



  </form>

</body>
</html>