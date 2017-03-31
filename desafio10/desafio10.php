<?php

if(isset($_GET["calcular"])){
  $nome = $_GET["nome"];
  $nota1 = $_GET["nota1"];
  $nota2 = $_GET["nota2"];
  $media = ($nota1 + $nota2) /2;
}

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
          <button type="submit" class="btn btn-primary" name="calcular">Calcular Média</button>
        </form>
        <br>
        <?php
          if(isset($media)){
            echo "<div class='alert alert-success'> Parabéns $nome, sua média é <strong>$media</strong></div>";
          }
        ?>

    </div>
  </div>


</body>
</html>
