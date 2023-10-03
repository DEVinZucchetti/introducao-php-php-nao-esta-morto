<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lanchonete</title>
</head>
<style>
  :root {
    font-family: sans-serif;
  }
</style>
<body>
  <h1>Seja bem vindo(a), este é o nosso cardápio!</h1>
  <p>1 - 🍔 Hambúrguer - R$ 15,00</p>
  <p>2 - 🍟 Batata Frita - R$ 8,00</p>
  <p>3 - 🥗 Salada - R$ 12,00</p>
  <p>4 - 🍕 Pizza - R$ 20,00</p>
  <p>5 - 🍣 Sushi - R$ 25,00</p>
  <p>6 - 🍦 Sorvete - R$ 7,00</p>
  <p>7 - 🍩 Donut - R$ 5,00</p>
  <p>8 - 🍹 Suco - R$ 6,00</p>
  <p>9 - 🍰 Bolo - R$ 10,00</p>

  <form action="calcular_preco.php" method="POST">
    <p>Por favor, digite o código e a qantidade do produto desejado.</p>
    <label for="codigo">Código</label>
    <input type="number" name="codigo" id="codigo" value="<?php echo filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT); ?>">
    <br>
    <br>
    <label for="quantidade">Quantidade</label>
    <input type="number" name="quantidade" id="quantidade" value="<?php echo filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT); ?>">
    <br>
    <br>
    <button type="submit">Finalizar pedido</button>
  </form>
</body>

</html>
