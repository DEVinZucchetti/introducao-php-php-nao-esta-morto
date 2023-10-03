<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
    <style>
        :root {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>Resultado do IMC</h1>

    <?php
    $method = $_SERVER["REQUEST_METHOD"];

    if ($method === "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);

        echo "Seu IMC é: " . number_format($imc, 2) . "<br>";

        if ($imc < 18.5) {
            echo "Você está abaixo do peso.";
        } else if ($imc >= 18.5 && $imc < 24.9) {
            echo "Seu peso está saudável.";
        } else if ($imc >= 25 && $imc < 29.9) {
            echo "Você está com sobrepeso.";
        } else {
            echo "Você está obeso.";
        }
    } else {
        echo "Os dados não foram recebidos.";
    }
    ?>
    <br><br>
    <a href="imc.php">Calcular novamente</a>
</body>

</html>