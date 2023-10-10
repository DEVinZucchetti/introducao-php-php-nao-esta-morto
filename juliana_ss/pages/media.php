<?php
if(isset($_GET['error'])) {
    echo  "<script>alert('Preencha todos os campos corretamente');</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular a média</title>
</head>
<body>
<form method="post" action="calcular_media.php">
    <label>Digite a primeira nota:</label>
        <input type="number" placeholder="Primeira nota" name="nota1" />
        <br />
        <br />
        <label>Digite a segunda nota:</label>
        <input type="number" placeholder="Segundo valor" name="nota2" />
        <br />
        <br />
        <label>Digite a terceira nota:</label>
        <input type="number" placeholder="Segundo valor" name="nota3" />
        <br />
        <br />
        <label>Digite a quarta nota:</label>
        <input type="number" placeholder="Segundo valor" name="nota4" />
        <br />
        <br />
        <button type="submit">Calcular</button>
    </form>
</body>
</html>