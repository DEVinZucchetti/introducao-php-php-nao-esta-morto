<?php
$v1 = filter_var($_POST['v1'], FILTER_VALIDATE_FLOAT);
$v2 = filter_var($_POST['v2'], FILTER_VALIDATE_FLOAT);
$opSelect = filter_var($_POST['opSelect'], FILTER_SANITIZE_STRING);

if (!$v1 || !$v2 || $opSelect === false) {
    echo "Todos os campos são obrigatórios!";
} else {
    if ($opSelect == '+') {
        $result = $v1 + $v2;
    } elseif ($opSelect == '-') {
        $result = $v1 - $v2;
    } elseif ($opSelect == 'x') {
        $result = $v1 * $v2;
    } elseif ($opSelect == '/') {
        if ($v2 != 0) {
            $result = $v1 / $v2;
        } else {
            echo "Divisão por zero não é permitida!";
            exit;
        }
    } else {
        echo "Operação inválida!";
        exit;
    }

    echo "Resultado: " . $result;
}
