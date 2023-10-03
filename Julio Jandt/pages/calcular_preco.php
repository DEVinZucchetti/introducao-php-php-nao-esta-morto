<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Preço</title>
</head>
<body>
    <h1>Resultado do Preço</h1>

    <?php
    // Função para calcular o preço com base no código e quantidade
    function calcularPreco($precoUnitario, $quantidade) {
        $valorTotal = $precoUnitario * $quantidade;
        echo "Valor a ser pago: R$ " . number_format($valorTotal, 2);
    }

    // Obtém os valores do código do produto e quantidade do formulário
    $codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

    if ($codigo && $quantidade) {
        // Calcula o preço com base no código do produto
        switch ($codigo) {
            case 100:
                calcularPreco(1.20, $quantidade);
                break;
            case 101:
                calcularPreco(1.30, $quantidade);
                break;
            case 102:
                calcularPreco(1.50, $quantidade);
                break;
            case 103:
                calcularPreco(1.20, $quantidade);
                break;
            case 104:
                calcularPreco(1.30, $quantidade);
                break;
            case 105:
                calcularPreco(1.0, $quantidade);
                break;
            default:
                echo "Código inválido";
                break;
        }
    } else {
        echo "Entrada de dados inválida.";
    }
    ?>
</body>
</html>