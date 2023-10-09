<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nota1 = $_POST['nota1'];
 $nota2 = $_POST['nota2'];
 $nota3 = $_POST['nota3'];
 $nota4 = $_POST['nota4'];

 $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Resultado da Média</title>
</head>

<body>
 <h1>Resultado da Média</h1>
 <?php
 if (isset($media)) {
  echo "<table border='1'>";
  echo "<tr><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Nota 4</th><th>Média</th></tr>";
  echo "<tr><td>{$nota1}</td><td>{$nota2}</td><td>{$nota3}</td><td>{$nota4}</td><td>{$media}</td></tr>";
  echo "</table>";
 } else {
  echo "<p>Algo deu errado. Por favor, volte e tente novamente.</p>";
 }
 ?>
 <a href="media.php">Calcular novamente</a>
</body>

</html>