<?php

$peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_INT);
$altura = filter_input(INPUT_POST, 'altura', FILTER_SANITIZE_NUMBER_INT);

$altura = $altura / 100;
$resultado = $peso / ($altura * $altura);

if (!$peso || !$altura) {
    header('Location: res$resultado.php?error=true');
  }elseif ($resultado < 18.5){
    echo "Você está abaixo do peso";
} elseif ($resultado >= 18.5 && $resultado <= 24.9) {
    echo "Você está com o peso normal";
} elseif ($resultado >= 25 && $resultado <= 29.9) {
    echo "Você está com sobrepeso";
} elseif ($resultado >= 30 && $resultado <= 34.9) {
    echo "Você está com obesidade grau 1";
} elseif ($resultado >= 35 && $resultado <= 39.9) {
    echo "Você está com obesidade grau 2";
} elseif ($resultado >= 40) {
    echo "Você está com obesidade grau 3";
}
  


?>