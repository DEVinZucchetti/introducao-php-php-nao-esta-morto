<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Preço na Lanchonete</title>
</head>
<body>
    <h1>Calculadora de Preço na Lanchonete</h1>
    <form action="calcular_preco.php" method="post">
        <label for="codigo">Código do produto:</label>
        <input type="number" id="codigo" name="codigo" required><br><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <input type="submit" value="Calcular Preço">
    </form>
</body>
</html>