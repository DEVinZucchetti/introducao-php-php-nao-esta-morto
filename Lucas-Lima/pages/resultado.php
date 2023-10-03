<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado da Calculadora</title>
</head>
<style>
    :root {
        font-family: sans-serif;
    }
</style>
<body>
  <h1>Resultado da Calculadora</h1>
  <?php
 
  $valor1 = $_POST['valor1'];
  $valor2 = $_POST['valor2'];
  $operacao = $_POST['operacao'];

  $resultado = 0;
  
  switch ($operacao) {
    case 'soma':
      $resultado = $valor1 + $valor2;
      $sinal = "+";
      break;
    case 'subtracao':
      $resultado = $valor1 - $valor2;
      $sinal = "-";
      break;
    case 'multiplicacao':
      $resultado = $valor1 * $valor2;
      $sinal = "*";
      break;
    case 'divisao':
      if ($valor2 != 0) {
        $resultado = $valor1 / $valor2;
        $sinal = "/";
      } else {
        echo "Erro: Divisão por zero!";
      }
      break;
    default:
      echo "Operação inválida!";
  }
  echo "Expressão: $valor1 $sinal $valor2 = $resultado";
 
  ?>
</body>
</html>
