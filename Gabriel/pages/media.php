<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .containter {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        background-color: grey;
        gap: 20px;
    }

    .field {
        background-color: white;
        font-weight: bolder;
        font-size: larger;
    }
    </style>
</head>

<body>
    <div class="containter">
        <div class="field">
            CALCULADORA DE MÉDIA
        </div>
        <div>
            <form method="post" action="calc_med.php">
                <label for="n1">NOTA 1</label><br>
                <input type="number" name="n1"><br>
                <label for="n2">NOTA 2</label><br>
                <input type="number" name="n2"><br>
                <label for="n3">NOTA 3</label><br>
                <input type="number" name="n3"><br>
                <label for="n4">NOTA 4</label><br>
                <input type="number" name="n4" step="any"><br>
                <button type="submit">CALCULAR</button>
            </form>
        </div>
    </div>
</body>

</html>