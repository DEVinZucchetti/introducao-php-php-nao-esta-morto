<?php 

$peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
$altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

if(!$peso || !$altura) {
    echo "O peso e altura são obrigatórios";
    exit;
} else {
    $calculo_imc = $peso / ($altura * $altura); 
    echo "O seu IMC é " .number_format($calculo_imc, 2);
}



?>