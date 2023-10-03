<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST['peso']) && isset($_POST['altura'])) {
        $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);
        $altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);
        $altura = $altura / 100;

        $imc = number_format($peso / ($altura * $altura), 2);

        echo "<h2>Seu IMC é: $imc</h2>";
    } else {
        echo "<h1>Por favor, preencha os campos</h1>";
    }

    ?>
</body>

</html>