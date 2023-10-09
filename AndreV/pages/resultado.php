<?php
// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $valor1 = $_POST["valor1"];
 $valor2 = $_POST["valor2"];
 $operacao = $_POST["operacao"];

 // Realizar o cálculo com base na operação escolhida
 switch ($operacao) {
  case "soma":
   $resultado = $valor1 + $valor2;
   $simbolo = "+";
   break;
  case "subtracao":
   $resultado = $valor1 - $valor2;
   $simbolo = "-";
   break;
  case "multiplicacao":
   $resultado = $valor1 * $valor2;
   $simbolo = "*";
   break;
  case "divisao":
   // Verificar se o divisor é zero para evitar divisão por zero
   if ($valor2 == 0) {
    die("Erro: Divisão por zero não é permitida.");
   }
   $resultado = $valor1 / $valor2;
   $simbolo = "/";
   break;
  default:
   die("Erro: Operação inválida.");
 }
 // Exibir a expressão matemática e o resultado
 echo "<h1>Resultado</h1>";
 echo "<p>${valor1} ${simbolo} ${valor2} = ${resultado}</p>";
}