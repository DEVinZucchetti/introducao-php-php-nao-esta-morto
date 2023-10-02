<?php
$codigo= filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
$quantidade= filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

if(!$codigo || !$quantidade){
   echo "Informacoes incorretas";
   exit;
} else{
    switch($codigo){
        case 3456:{
            $valor = number_format($quantidade * 6, 2);
            echo "Voce pedio $quantidade Coxinha(s) e vai pagar $valor real ";
            break;
        };
        case 3457:{
            $valor = number_format($quantidade * 8, 2);
            echo "Voce pedio $quantidade Leite(s) e vai pagar $valor real ";
            break;
        };
        case 3458:{
            $valor = number_format($quantidade * 2, 2);
            echo "Voce pedio $quantidade Pao(s) e vai pagar $valor real ";
            break;
        }
        default:{
            echo "Codigo nao localizado";
            break;
        }

    }

}

?>