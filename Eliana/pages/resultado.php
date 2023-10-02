<?php
$numero = filter_input(INPUT_POST, "valor", FILTER_VALIDATE_INT);

if(!$numero){
    echo "Informe um numero valido";
}else{
    for($contador = 1; $contador <=10; $contador++){
        $resultado =$contador + $numero;
        echo "$numero + $contador = $resultado"." <br/>";
    }

    echo "<hr />";

    for($contador = 1; $contador <=10; $contador++){
        $resultado =$contador - $numero;
        echo "$numero - $contador = $resultado"." <br/>";
    }
    echo "<hr />";   

    for($contador = 1; $contador <=10; $contador++){
        $resultado =$contador * $numero;
        echo "$numero x $contador = $resultado"." <br/>";
    }
    echo "<hr />";

    for($contador = 1; $contador <=10; $contador++){
        $resultado =$contador / $numero;
        echo "$numero / $contador = " .number_format($resultado, 2)." <br/>";
        
    }
    echo "<hr />";

}
?>