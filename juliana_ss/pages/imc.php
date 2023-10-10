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
  <title>Calcular IMC</title>
</head>
<body>
<p>Para calcular o IMC informe: </p>
    <form method="post" action="calcular_imc.php">
    <label>Peso::</label>
        <input type="number" placeholder="Digite o peso" name="peso" />
        <br />
        <br />
        <label>Altura:</label>
        <input type="number" placeholder="Digite a altura" name="altura" />
        <br />
        <br />
        <button type="submit">Calcular</button>
    </form>
  </body>
</html>