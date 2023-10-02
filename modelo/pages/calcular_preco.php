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
    <h1>Se pedido foi finalizado!</h1>

    <?php
    $method = $_SERVER["REQUEST_METHOD"];

    if ($method === 'POST') {
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
    }
    echo "$codigo $quantidade";
    
    ?>