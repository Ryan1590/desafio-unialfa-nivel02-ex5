<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
      body {
          background-color: blueviolet;
      }
  </style>
</head>
<body>

<div class="container mt-4 bg-light p-4 rounded">
  <h2 class="mb-4 text-center">Formulário</h2>
  <form action="recupera-dados.php" method="post">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email">
    </div>
    <div class="form-group">
      <label for="idade">Idade:</label>
      <input type="number" name="idade" class="form-control" id="idade" placeholder="Digite sua idade">
    </div>
    <div class="form-group">
      <label for="hobbie">Hobbie:</label>
      <input type="text" name="hobbie" class="form-control" id="hobbie" placeholder="Digite seu hobbie">
    </div>
    <div class="form-group text-center">
      <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
