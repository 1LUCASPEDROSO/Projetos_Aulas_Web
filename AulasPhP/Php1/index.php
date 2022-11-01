<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 PHP</title>
</head>
<body>
    <?php
        $valor = 1;
        $indice =5;
        //variaveis constantes
        define("local","host");
        //      chave , valor
        $nomes = array("lucas","1drakoon1");

        for($x =0; $x <=15;$x++)
        {
            echo($indice."x".$x."=".($indice * $x));
        }

        foreach($nomes as $chave)
        {
            echo("<br>");
            echo("[".$chave."]");
        }
        echo("<br>");
        echo("testando metodo de inserir dados na tela com PHP usando o comando Echo");
        echo("-->".$valor);
        echo local;
        echo $nomes[1];
    


    ?>
</body>
</html>