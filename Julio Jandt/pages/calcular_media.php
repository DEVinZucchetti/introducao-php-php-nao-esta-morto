<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Media</title>
</head>
<body>
    
<h1>Resultado da Media</h1>

<?php 

function calcularMedia($nota1, $nota2, $nota3, $nota4) {
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    return $media;
}

$nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
$nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
$nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);
$nota4 = filter_input(INPUT_POST, 'nota4', FILTER_VALIDATE_FLOAT);

if ($nota1 !== null && $nota2 !== null && $nota3 !== null && $nota4 !== null) {

    $media = calcularMedia($nota1, $nota2, $nota3, $nota4);

    echo "<table border='1'>
            <tr>
            
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>

            </tr>

            <tr>
            
            <td>{$nota1}</td>
            <td>{$nota2}</td>
            <td>{$nota3}</td>
            <td>{$nota4}</td>

            </tr>
        </table>";

        echo "<p>Média:" . number_format($media, 2) . "</p>";

} else {
    echo "Entrada de dados inválidas.";
}

?>


</body>
</html>