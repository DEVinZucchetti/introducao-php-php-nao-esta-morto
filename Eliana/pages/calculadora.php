<?php
$codigo= filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_FLOAT);
$quantidade= filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_FLOAT);

if(!$codigo || $quantidade){
    header('Location:lanchonete.php?error=true');
}

//var_dump($peso);

$resultado= $codigo + $quantidade;
echo "Valor do frete e $resultado";
?>