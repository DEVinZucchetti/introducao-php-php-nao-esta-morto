<?php 

$primeira_nota = filter_var($_POST['primeira_nota'], FILTER_VALIDATE_FLOAT);
$segunda_nota = filter_var($_POST['segunda_nota'], FILTER_VALIDATE_FLOAT);
$terceira_nota = filter_var($_POST['terceira_nota'], FILTER_VALIDATE_FLOAT);
$quarta_nota = filter_var($_POST['quarta_nota'], FILTER_VALIDATE_FLOAT);

if(!$primeira_nota || !$segunda_nota || !$terceira_nota || !$quarta_nota) {
    echo "Informe todas as notas do aluno";
    exit;
} else {
    $calculo_media = ($primeira_nota + $segunda_nota + $terceira_nota + $quarta_nota) / 4; 
    echo "A média do aluno é " .number_format($calculo_media, 2);
}

?>