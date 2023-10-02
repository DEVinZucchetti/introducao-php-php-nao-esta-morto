<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .containter {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      background-color: grey;
      gap: 20px;
    }

    .field {
      background-color: white;
      font-weight: bolder;
      font-size: larger;
    }
  </style>
</head>

<body>
  <div class="containter">
    <div class="field">
      LANCHONETE
    </div>
    <div>
      <form method="post" action="calc_lanc.php">
        <label for="code">PRODUTO</label><br>
        <input type="number" name="code"><br>
        <label for="amount">QUANTIDADE</label><br>
        <input type="number" name="amount" step="any"><br>
        <button type="submit">CALCULAR</button>
      </form>
    </div>
  </div>
</body>

</html>