<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $peso = $_POST["peso"];
 $altura = $_POST["altura"];

 if ($peso <= 0 || $altura <= 0) {
  echo "Por favor, insira valores válidos para peso e altura!";
 } else {
  $imc = $peso / ($altura * $altura);
  echo "<h1>Seu IMC</h1>";
  echo "<p>O seu Índice de Massa Corporal (IMC) é: " . number_format($imc, 2) . "</p>";

  echo "<p><b>Classificação e Intervalo - IMC</b></p>";
  if ($imc < 18.5) {
   echo "<p>Magreza, onde o IMC é menor que 18,5 kg/m²</p>";
  } elseif ($imc < 24.9) {
   echo "<p>Normal, onde o IMC está entre 18,5 e 24,9 kg/m²</p>";
  } elseif ($imc < 30) {
   echo "<p>Sobrepeso, onde o IMC está entre 24,9 e 30 kg/m²</p>";
  } else {
   echo "<p>Obesidade, onde o IMC é maior que 30 kg/m²</p>";
  }
 }
} else {
 echo "Por favor, use o formulário para enviar os dados.";
}