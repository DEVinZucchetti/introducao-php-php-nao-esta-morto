<?php
$peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
$altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

if (!$peso || !$altura) {
    echo "Peso e altura obrigatórios";
    exit;
} else {
    $imc = $peso / ($altura * $altura);
    echo "IMC = " . number_format($imc, 2);
}

if ($imc <= 18.5) {
    echo " Abaixo do Peso";
} else if ($imc <= 24.9) {
    echo " Peso Ideal";
} else if ($imc <= 29.9) {
    echo " Acima do Peso";
} else if ($imc <= 34.9) {
    echo " Obesidade Grau I";
} else if ($imc <= 39.9) {
    echo " Obesidade Grau II";
} else if ($imc >= 40) {
    echo " Obesidade Grau III";
}
