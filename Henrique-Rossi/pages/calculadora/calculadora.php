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
      height: 100vh;
      background-color: rgb(28, 28, 28);
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

    #form label {
      font-size: 16px;
      color: ghostwhite;
    }

    #form input {
      width: 300px;
      height: 35px;
      border-radius: 30px;
      outline: none;
      border: 1px solid ghostwhite;
      transition: all 0.5s;
    }

    #form input:focus {
      border: 2px solid gold;
    }

    #form button {
      width: 150px;
      height: 35px;
      border-radius: 30px;
      outline: none;
      background-color: transparent;
      transition: all 0.5s;
      border: 2px solid ghostwhite;
      color: ghostwhite;
    }

    #form button:hover {
      border: 2px solid gold;
      cursor: pointer;
      color: gold;
    }
  </style>
  <title>Calculadora</title>
</head>

<body>
  <main>
    <form action="./resultado.php" method="post" id="form">
      <div class="fields">
        <label for="">Número:</label> <br>
        <input type="number01" class="inputs" placeholder="Digite um número..." name="valor">
      </div>
    
      <div class="fields">
        <label for="operacao">Operação:</label> <br>
        <input type="text" class="inputs" placeholder="Digite a operação desejada..." name="operacao">
      </div>

      <button>Calcular</button>
    </form>
  </main>
</body>

</html>