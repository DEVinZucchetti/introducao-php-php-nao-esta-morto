<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        main {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: rgb(28, 28, 28);
            color: ghostwhite;
        }

        .error-message,
        .result {
            font-size: 18px;
            margin-top: 20px;
            font-weight: 700;
        }

        .error-message {
            color: red;
        }
    </style>
    <title>Média</title>
</head>

<body>
    <main>
        <?php
        $nota01 = $_REQUEST["nota01"];
        $nota02 = $_REQUEST["nota02"];
        $nota03 = $_REQUEST["nota03"];
        $nota04 = $_REQUEST["nota04"];

        if (!$nota01 || !$nota02 || !$nota03 || !$nota04) {
            echo "<p class='error-message'>Não foi possível calcular a média!</p>";
        } else if ($nota01 > 10 || $nota01 < 0 || $nota02 > 10 || $nota02 < 0 || $nota03 > 10 || $nota03 < 0 || $nota04 > 10 || $nota04 < 0) {
            echo "<p class='error-message'>As notas só podem ser números entre 0 e 10!</p>";
        } else {
            $media = ($nota01 + $nota02 + $nota03 + $nota04) / 4;
            echo "<p class='result'>A sua média foi: $media</p>";
        }
        ?>


    </main>
</body>

</html>