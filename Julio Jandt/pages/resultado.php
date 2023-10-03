<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Operação</title>
</head>
<body>
    
    <h1>Resultado da Operação</h1>

    <?php 
    
    function calcular($valor1, $valor2, $operacao) {
        switch ($operacao) {
            case 'soma':
                return $valor1 + $valor2;
            case 'subtracao':
                return $valor1 - $valor2;
            case 'multiplicacao':
                return $valor1 * $valor2;
            case 'divisao':
                if ($valor2 != 0) {
                    return $valor1 / $valor2;
                } else {
                    return "Divisão por zero não é permitida.";
                }
            default:
            return "Operação invalida.";
        }
    }

    $valor1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_FLOAT);
    $valor2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_FLOAT);
    $operacao = filter_input(INPUT_POST, 'operacao', FILTER_SANITIZE_STRING);

    if ($valor1 !== null && $valor2 !== null && $operacao) {
        echo "Expressão:" . $valor1 . " " . $operacao . " " . $valor2 . "=";

        $resultado = calcular($valor1, $valor2, $operacao);

        echo $resultado;
    } else {
        echo "Entrada de dados inválida.";
    }
    
    ?>
</body>
</html>