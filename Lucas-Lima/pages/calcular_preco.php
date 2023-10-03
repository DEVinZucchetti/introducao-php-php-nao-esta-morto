<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Pedido Finalizado</title>
    <style>
        :root {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>Seu pedido foi finalizado!</h1>

    <?php
    $method = $_SERVER["REQUEST_METHOD"];

    if ($method === 'POST') {
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];

    function calcularPreco($preco, $quantidade) {
        $valorTotal = ($preco * $quantidade);
        echo "O valor total do seu pedido é: R$$valorTotal";
    }

        switch($codigo) {
            case 1: {
                calcularPreco(15.00, $quantidade);
                break;
            }
            case 2: {
                calcularPreco(8.00, $quantidade);
                break;
            }
            case 3: {
                calcularPreco(12.00, $quantidade);
                break;
            }
            case 4: {
                calcularPreco(20.00, $quantidade);
                break;
            }
            case 5: {
                calcularPreco(25.00, $quantidade);
                break;
            }
            case 6: {
                calcularPreco(7.00, $quantidade);
                break;
            }
            case 7: {
                calcularPreco(5.00, $quantidade);
                break;
            }
            case 8: {
                calcularPreco(6.00, $quantidade);
                break;
            }
            case 9: {
                calcularPreco(10.00, $quantidade);
                break;
            }
            default: {
                echo "código inválido";
            }
        }
    }

    
    
    ?>