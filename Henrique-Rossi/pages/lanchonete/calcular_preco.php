<!DOCTYPE html>
<html lang="en">

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
            width: auto;
            height: 100vh;
            background-color: rgb(28, 28, 28);
        }

        p {
            width: auto;
            text-align: center;
            font-size: 16px;
            padding-top: 50px;
            font-size: 20px;
            font-weight: 700;
        }

        .error-message {
            color: red;
        }
    </style>
    <title>Cálculo do preço</title>
</head>

<body>
    <main>
        <?php

        $codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
        $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

        if (!$codigo || !$quantidade) {
            echo "<p class='error-message'>Informações incorretas!</p>";
            exit;
        } else {

            switch ($codigo) {
                case 3456: {
                        $valor = number_format($quantidade * 6, 2);
                        echo "<p class='success-message'>Você pediu $quantidade Coxinha(s) e vai pagar $valor</p>";
                        break;
                    }
                case 3457: {
                        $valor = number_format($quantidade * 1, 2);
                        echo "<p class='success-message'>Você pediu $quantidade Sushi(s) e vai pagar $valor</p>";
                        break;
                    }
                case 3458: {
                        $valor = number_format($quantidade * 8.99, 2);
                        echo "<p class='success-message'>Você pediu $quantidade pastéi(s) e vai pagar $valor</p>";
                        break;
                    }
                default: {
                        echo "<p class='error-message'> Código não localizado!</p>";
                        break;
                    }
            }
        }

        ?>
    </main>
</body>

</html>