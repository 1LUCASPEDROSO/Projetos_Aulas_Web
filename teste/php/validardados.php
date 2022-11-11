<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <form action="php/validardados.php" method="post">
        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
    </form>
</body>
</html>
<?php
$nome = $_POST["nome"];
$senga = $_POST["senha"];

if($nome != "lucas" & $senha != "viper1")
{
    
}



?>