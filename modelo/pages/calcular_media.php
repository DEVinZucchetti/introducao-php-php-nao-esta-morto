<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>

<style>
    :root {
        font-family: sans-serif;
    }
    h1{
        text-align: center;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<body>
    <h1>Notas e média</h1>
    <?php
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST') {
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nome do Aluno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nome ?></td>
                <td><?php echo $nota1 ?></td>
                <td><?php echo $nota2 ?></td>
                <td><?php echo $nota3 ?></td>
                <td><?php echo $nota4 ?></td>
                <td><?php echo $media ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>