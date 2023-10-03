<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>

<body>

    <h1>Resultado do IMC</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
    }

    //Calcula o IMC
    $imc = $peso / ($altura * $altura);

    //Mostra o resultado e a calssificação
    echo "<p>Seu IMC é " . number_format($imc, 2) . "</p>";
    echo "<p>Classificação: ";

    if ($imc < 18.5) {
        echo "Abaixo do peso";
    } elseif ($imc < 24.9) {
        echo "Peso normal";
    } elseif ($imc < 29.9) {
        echo "Sobrepesso";
    } elseif ($imc < 34.9) {
        echo "Obesidade grau 1";
    } elseif ($imc < 39.9) {
        echo "Obesidade nivel 2";
    } else {
        echo "Obesidade nivel grau 3";
    }

        echo "</p>";

    ?>

</body>

</html>