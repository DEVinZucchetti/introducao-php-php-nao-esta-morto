<?php
$n1 = filter_var($_POST['n1'], FILTER_VALIDATE_FLOAT);
$n2 = filter_var($_POST['n2'], FILTER_VALIDATE_FLOAT);
$n3 = filter_var($_POST['n3'], FILTER_VALIDATE_FLOAT);
$n4 = filter_var($_POST['n4'], FILTER_VALIDATE_FLOAT);

if (!$n1 || !$n2 || !$n3 || !$n4) {
    echo "Todos os campos são obrigatórios!";
} else {
    $sum = $n1 + $n2 + $n3 + $n4;
    $result = $sum / 4;

    echo "A média é: $result";
}
