<?php 

$valor1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_FLOAT);
$valor2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_FLOAT);
$operacao = $_POST['operacao'];

if (!$valor1 || !$valor2 || !$operacao) {
    header('Location: calculadora.php?error=true');
}

switch ($operacao) {
    case 'soma':{ 
        $resultado = $valor1 + $valor2;
        echo "O resultado é: $valor1 + $valor2 = $resultado";
        break;
    }
    case 'subtracao':{ 
        $resultado = $valor1 - $valor2;
        echo " O resultado é: $valor1 - $valor2 = $resultado";
        break;
    }
    case 'multiplicacao':{
        $resultado = $valor1 * $valor2;
        echo " O resultado é: $valor1 * $valor2 = $resultado";
        break;
    }
    case 'divisao':{
        $resultado = $valor1 / $valor2;
        echo " O resultado é: $valor1 / $valor2 = $resultado";
        break;
    }
}
?>