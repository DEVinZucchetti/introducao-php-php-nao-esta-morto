<?php
    $nota1 = filter_var($_POST['nota1'], FILTER_VALIDATE_FLOAT);
    $nota2 = filter_var($_POST['nota2'], FILTER_VALIDATE_FLOAT);
    $nota3 = filter_var($_POST['nota3'], FILTER_VALIDATE_FLOAT);
    $nota4 = filter_var($_POST['nota4'], FILTER_VALIDATE_FLOAT);

    if(!$nota1 || !$nota2 || !$nota3 || !$nota4) {
        echo "As cuatro notas são necessárias";
        exit;
    } else {
        $media = ($nota1 + $nota2 + $nota3+ $nota4)/4;
        echo "O valor da media é ".number_format($media, 2);
        

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nota 1</th>";
        echo "<th>Nota 2</th>";
        echo "<th>Nota 3</th>";
        echo "<th>Nota 4</th>";
        echo "<th>MEDIA</th>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<th>$nota1</th>";
        echo "<th>$nota2</th>";
        echo "<th>$nota3</th>";
        echo "<th>$nota4</th>";
        echo "<th>$media</th>";
        echo "</tr>";
        
    }
?>