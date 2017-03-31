<?php

//SETANDO COOKIE

$nome = "NomeDoCookie";
$valor = "200";
$expira = time() + (60 * 60 * 24 * 7);

setcookie($nome, $valor, $expira);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>COOKIES</title>
</head>
<body>


</body>
</html>
