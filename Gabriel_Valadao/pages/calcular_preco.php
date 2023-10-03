<?php 
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

if(!$codigo || !$quantidade) {
    echo "Informe os dados corretos";
} else {
    switch($codigo) {

        case 500: {
            $calculo_preco = number_format($quantidade * 5, 2);
            echo "Você solicitou $quantidade pão(es) de queijo e vai pagar R$ $calculo_preco";
            break;
        }
        case 501: {
            $calculo_preco = number_format($quantidade * 4, 2);
            echo "Você solicitou $quantidade trouxinha(s) e vai pagar R$ $calculo_preco";
            break;
        }
        case 502: {
            $calculo_preco = number_format($quantidade * 6, 2);
            echo "Você solicitou $quantidade coxinha(s) e vai pagar R$ $calculo_preco";
            break;
        }
    }
}
