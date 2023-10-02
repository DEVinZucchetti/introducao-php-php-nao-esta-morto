<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<style>
    :root {
        font-family: sans-serif;
    }
</style>

<body>
    <h1>Calculadora de IMC</h1>
    <form action="calcular_imc.php" method="POST">
        <label for="peso">Peso (em quilogramas):</label>
        <input type="number" step="0.01" name="peso" id="peso" required>
        <br>
        <br>
        <label style="margin-left: 20px;" for="altura">Altura (em metros):</label>
        <input style="margin-right: 10px" type="number" step="0.01" name="altura" id="altura" required>
        <br>
        <br>
        <button style="margin-left: 10%;" type="submit">Calcular IMC</button>
    </form>
</body>

</html>