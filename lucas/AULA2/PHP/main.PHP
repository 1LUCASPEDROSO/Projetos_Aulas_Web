<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de cadastro</title>
</head>
<body>
    <?php
    $nome = $_POST["idHeros"];
    $escola = $_POST["escolaHeros"];
    $senha = $_POST["senha"];
    $datanascimento = $_POST["data"];
    $hero = $_POST["favHero"];

    $flag =0;

    if(empty($nome) || $nome=="all might" || $nome=="aizawa")
    {
        $flag = 1;
        echo("<p>nome não passou</p>");
    }
    elseif(empty($escola) || !$escola=="u.a")
    {
        $flag =1;
        echo("<p>escola não passou</p>");
    }
    elseif(!isset($hero))
    {
        echo("<p>selecione um heroi para continuar</p>");   
    }
    else{
    echo("<p>$nome</p>");
    echo("<p>$escola</p>");
    echo("<p>$senha</p>");
    echo("<p>$datanascimento</p>");
    echo("<p>$hero</p>");
    }
    ?>
</body>
</html>