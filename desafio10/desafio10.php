<?php
/*
Usando o método GET, crie um formulário que receba o nome do estudante,
2 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado!
Faça a validação dos campos de modo que usuário tenha que preencher todos os campos.
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 10</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container">

      <div class="col-md-6">

        <h1 class="text-center">DESAFIO 10 - NOTAS</h1>

        <form method="get" action="desafio10.php">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="text" class="form-control" id="nota1" name="nota1" placeholder="Nota 1">
          </div>
          <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="text" class="form-control" id="nota2" name="nota2" placeholder="Nota 2">
          </div>
          <button type="submit" class="btn btn-primary">Calcular Média</button>
        </form>

    </div>
  </div>


</body>
</html>
