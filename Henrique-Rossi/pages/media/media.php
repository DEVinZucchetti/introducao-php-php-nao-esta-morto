<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    main {
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: rgb(28, 28, 28);
      color: ghostwhite;
    }

    form {
      width: 300px;
      height: auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    #form label {
      font-size: 16px;
      color: ghostwhite;
    }

    input{
      width: 300px;
      height: 35px;
      border-radius: 30px;
      outline: none;
      border: 1px solid ghostwhite;
      transition: all 0.5s;
    }

    input:focus {
      border: 2px solid gold;
    }

    button {
      width: 150px;
      height: 35px;
      border-radius: 30px;
      outline: none;
      background-color: transparent;
      transition: all 0.5s;
      border: 2px solid ghostwhite;
      color: ghostwhite;
    }

    button:hover {
      border: 2px solid gold;
      cursor: pointer;
      color: gold;
    }
  </style>

  <title>Média</title>
</head>

<body>
  <main>

    <form action="./calcular_media.php" method="post">
      <div class="fields">
        <label for="nota01">Nota 1:</label> <br>
        <input type="number" placeholder="Digite a primeira nota..." class="inputs" name="nota01" id="nota01">
      </div>
      <div class="fields">
        <label for="nota02">Nota 2:</label> <br>
        <input type="number" placeholder="Digite a segunda nota..." class="inputs" name="nota02" id="nota02">
      </div>
      <div class="fields">
        <label for="nota03">Nota 3:</label> <br>
        <input type="number" placeholder="Digite a terceira nota..." class="inputs" name="nota03" id="nota03">
      </div>
      <div class="fields">
        <label for="nota04">Nota 4:</label> <br>
        <input type="number" placeholder="Digite a quarta nota..." class="inputs" name="nota04" id="nota04">
      </div>

      <button>Calcular Média</button>
    </form>
  </main>
</body>

</html>