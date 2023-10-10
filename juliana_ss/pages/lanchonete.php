<?php
if(isset($_GET['error'])) {
    echo  "<script>alert('Digite um dado válido!');</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lanchonete</title>
</head>
<body>
<p>Faça seu pedido: </p>
    <form method="post" action="calcular_preco.php">
    <label>Digite o código do produto:</label>
        <input type="number" placeholder="Digite o código" name="produto" />
        <br />
        <br />
        <label>Digite a quantidade:</label>
        <input type="number" placeholder="Digite a quantidade" name="quantidade" />
        <br />
        <br />
        <button type="submit">Fazer pedido</button>
    </form>
</body>
</html>