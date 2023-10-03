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
      width: auto;
      height: auto;
    }

    #form {
      width: auto;
      height: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    #form label{
      font-size: 16px;
      color: blue;
    }

    #form input{
      width: 300px;
      height: 35px;
      border-radius: 30px;
      outline: none;
      border: 1px solid gray;
      transition: all 0.5s;
    }

    #form input:focus{
      border: 2px solid blue;
    }

    #form button {
      width: 150px;
      height: 35px;
      border-radius: 30px;
      outline: none;
      background-color: transparent;
      transition: all 0.5s;
      border: 2px solid blue;
      color: blue;
    }

    #form button:hover {
      border: 2px solid cyan;
      cursor: pointer;
      color: cyan;
    }
  </style>
  <title>Form</title>
</head>

<body>
  <main>
    <form action="./calcular_imc.php" method="post" id="form">
      <div class="fields">
        <label for="peso">Peso:</label> <br>
        <input type="number" class="inputs" placeholder="Digite o seu peso..." name="peso">
      </div>
      <div class="fields">
        <label for="altura">Altura:</label> <br>
        <input type="number" class="inputs" placeholder="Digite a sua altura..." name="altura">
      </div>

      <button>Calcular</button>
    </form>
  </main>
</body>

</html>