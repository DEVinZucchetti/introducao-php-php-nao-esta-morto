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
            height: 100%;
            background-color: rgb(28, 28, 28);
        }

        p {
            width: auto;
            display: flex;
            justify-content: center;
            font-size: 20px;
            padding-top: 50px;
            font-weight: 700;
        }

        .error-message {
            color: red;
        }

        .result {
            color: green;
        }
    </style>
    <title>Resultado</title>
</head>

<body>
    <main>
        <?php
        $numero = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_INT);


        if (!$numero) {
            echo "Informe um número válido";
        } else {
            gerar_Tabuada('+', $numero);
            gerar_Tabuada('-',  $numero);
            gerar_Tabuada('*',  $numero);
            gerar_Tabuada('/',  $numero);
        }

        function gerar_Tabuada($operador, $numero)
        {
            for ($contador = 1; $contador <= 10; $contador++) {
                $resultado = 0;

                if ($operador === '+') {
                    $resultado = $numero + $contador;
                } else if ($operador === '-') {
                    $resultado = $numero - $contador;
                } else if ($operador === '*') {
                    $resultado = $numero * $contador;
                } else if ($operador === '/') {
                    $resultado = $numero /  $contador;
                }

                echo "$numero $operador $contador = $resultado" . "<br />";
            }
        }
        ?>
    </main>
</body>

</html>