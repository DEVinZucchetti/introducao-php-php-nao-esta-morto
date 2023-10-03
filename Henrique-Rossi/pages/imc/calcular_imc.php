<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        button {
            width: 150px;
            height: 35px;
            border-radius: 30px;
            outline: none;
            background-color: transparent;
            transition: all 0.5s;
            border: 2px solid blue;
        }

        button:hover {
            border: 2px solid cyan;
            cursor: pointer;
        }

        button a {
            text-decoration: none;
            color: blue;
            font-size: 16px;
            transition: all 0.5s;
        }

        button a:hover {
            color: cyan;
        }

        p {
            width: auto;
            display: flex;
            justify-content: center;
            font-size: 20px;
            margin: 50px;
            font-weight: 700;
        }

        .bad_result {
            color: red;
        }

        .success_result {
            color: green;
        }
    </style>
    <title>Resultado</title>
</head>

<body>
    <button><a href="./imc.php">Voltar</a></button>

    <?php
    $peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
    $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

    if (!$peso || !$altura) {
        echo "<p class='bad_result'>O peso e altura são necessários!</p>";
        exit;
    } else {
        $imc = $peso / ($altura * $altura);
        echo "<p class='success_result'>O seu imc é $imc</p>";
    }
    ?>
</body>

</html>