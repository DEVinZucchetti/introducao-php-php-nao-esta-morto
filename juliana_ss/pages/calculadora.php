<?php
if(isset($_GET['error'])) {
    echo  "<script>alert('Preencha todos os campos corretamente');</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>
<body>
<form method="post" action="resultado.php">
    <label>Digite o primeiro valor:</label>
        <input type="number" placeholder="Primeiro valor" name="valor1" />
        <br />
        <br />
        <label>Digite o primeiro valor:</label>
        <input type="number" placeholder="Segundo valor" name="valor2" />
        <br />
        <br />
        <label>Selecione a operação:</label>
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <br />
        <br />
        <button type="submit">Calcular</button>
    </form>
</body>
</html>