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
      CALCULADORA DE IMC
    </div>
    <div>
      <form method="post" action="calc_imc.php">
        <label for="peso">PESO (KG)</label><br>
        <input type="number" name="peso"><br>
        <label for="altura">ALTURA (Metros)</label><br>
        <input type="number" name="altura" step="any"><br>
        <button type="submit">CALCULAR</button>
      </form>
    </div>
  </div>
</body>

</html>