<!DOCTYPE html>
<html lang="pt-br">
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
  </style>
  <title>Lanchonete</title>
</head>
<body>
<main>
    <form action="./calcular_preco.php" method="post" id="form">
      <div class="fields">
        <label for="codigo">Código do produto:</label> <br>
        <input type="number" class="inputs" placeholder="Digite o código do produto..." name="codigo">
      </div>
      <div class="fields">
        <label for="quantidade">Quantidade:</label> <br>
        <input type="number" class="inputs" placeholder="Digite a quantidade desejada..." name="quantidade">
      </div>

      <button>Fazer Pedido</button>
    </form>
  </main>
</body>
</html>