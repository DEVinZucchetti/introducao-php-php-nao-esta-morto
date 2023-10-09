<?php
// Validando e obtendo dados de entrada usando filter_input
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

// Verificando se os dados de entrada são válidos
if (!$codigo || !$quantidade) {
 echo "Dados inválidos. Por favor, insira um número inteiro válido para código e quantidade.";
 exit;
}

// Calculando preço baseado no código do produto
function calcularPreco($preco, $quantidade)
{
 $valorTotal = $preco * $quantidade;
 echo "Valor a ser pago: R$ " . number_format($valorTotal, 2, ',', '.');
}

switch ($codigo) {
 case 100:
  calcularPreco(4.20, $quantidade);
  break;
 case 101:
  calcularPreco(4.30, $quantidade);
  break;
 case 102:
  calcularPreco(4.50, $quantidade);
  break;
 case 103:
  calcularPreco(4.20, $quantidade);
  break;
 case 104:
  calcularPreco(4.30, $quantidade);
  break;
 case 105:
  calcularPreco(4.00, $quantidade);
  break;
 default:
  echo "Código inválido.";
}