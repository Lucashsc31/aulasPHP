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

<?php 

/*
if(isset($_COOKIE["NomeDoCookie"])){
    $nomeCookie = $_COOKIE["NomeDoCookie"];
    echo $nomeCookie;
}else{
    $nomeCookie = "";
}
*/

if(isset($_COOKIE["OutroCookie"])){
    echo "Voce JÁ passou por aqui!!";
}else{
    echo "Voce NUNCA passou por aqui!!";
    setcookie("OutroCookie", "valor", time() + 3600);
}

?>

</body>
</html>
