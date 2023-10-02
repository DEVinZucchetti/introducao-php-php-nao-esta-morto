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
      CALCULADORA ARITIMÉTICA
    </div>
    <div>
      <form method="post" action="calc_ari.php">
        <label for="v1">VALOR 1</label><br>
        <input type="number" name="v1"><br>
        <label for="v2">VALOR 2</label><br>
        <input type="number" name="v2" step="any"><br>
        <label for="opSelect">OPERAÇÃO</label><br>
        <select name="opSelect" id="opSelect">
          <option value="+">Adição</option>
          <option value="-">Subtração</option>
          <option value="x">Multiplicação</option>
          <option value="/">Divisão</option>
        </select>
        <button type="submit">CALCULAR</button>
      </form>
    </div>
  </div>
</body>

</html>