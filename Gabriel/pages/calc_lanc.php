<?php
$code = filter_var($_POST['code'], FILTER_VALIDATE_FLOAT);
$amount = filter_var($_POST['amount'], FILTER_VALIDATE_FLOAT);

if (!$code || !$amount) {
    echo "Erro: Todos os campos são obrigatórios";
    exit;
} else {
    switch ($code) {
        case 3456:
            $valor = number_format($amount * 6, 2);
            echo "Você pediu $amount Coxinha(s) e vai pagar $valor";
            break;
        case 1234:
            $valor = number_format($amount * 5, 2);
            echo "Você pediu $amount Hambúrguer(es) e vai pagar $valor";
            break;
        case 5678:
            $valor = number_format($amount * 8, 2);
            echo "Você pediu $amount Pizza(s) e vai pagar $valor";
            break;
        case 9101:
            $valor = number_format($amount * 4, 2);
            echo "Você pediu $amount Batata(s) e vai pagar $valor";
            break;
        case 1121:
            $valor = number_format($amount * 7, 2);
            echo "Você pediu $amount Refrigerante(s) e vai pagar $valor";
            break;
        case 3141:
            $valor = number_format($amount * 3, 2);
            echo "Você pediu $amount Sanduíche(s) e vai pagar $valor";
            break;
        default:
            echo "Opção não encontrada";
            break;
    }
}
