<?php 

$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_NUMBER_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

/*if (!$codigo || !$quantidade) {
    header('Location: lanchonete.php?error=true');
  }*/

  switch ($produto) {
    case 100:{
    $preco = 1.20;
      break;
    }
    case 101:{
    $preco = 1.30;
      break;
    }
    case 102:{
    $preco = 1.50;
      break;
    }
    case 103:{
      $preco = 1.20;
      break;
    }
    case 104:{
     $preco = 1.30;
      break;
    }
    case 105:{
    $preco = 1.00;
      break;
    }
    default:
      echo "Código inválido";
  };

  $resultado = $preco * $quantidade;

  echo 'O seu pedido ficou R$'.$resultado

?>