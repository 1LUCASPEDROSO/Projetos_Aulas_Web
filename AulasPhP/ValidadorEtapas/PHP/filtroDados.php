<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiltroDados</title>
</head>
<body>
    <h1>Segunda Etapa de cadastro</h1>
    <form action="main.php" method="post">
    <!--receber e esconder os dados da etapa Anterior-->
    <input type="hidden" name="nomefiltrodados" value="<?php $nome=$_POST["nomeHero"]; echo("$nome") ?>">
    <input type="hidden" name="Escolafiltrodados" value="<?php $Escola=$_POST["escolaHero"] ; echo("$Escola") ?>">
    <input type="hidden" name="Senhafiltrodados" value="<?php $Senha=$_POST["Senha"] ; echo("$Senha") ?>">
    <input type="hidden" name="DataNascimentoFiltrodados" value="<?php $Data=$_POST["DataNascimento"]; echo("$Data") ?>">
    <input type="hidden" name="favheroFiltrodados" value="<?php $FavHero=$_POST["favHero"]; echo("$FavHero") ?>">
    <!--Novos dados adcionados a partir desta pagina-->
    <label for="InputCep">Cep:</label>
    <input type="number" name="Cepfiltradados" id="Cepfiltradados">
    <label for="InputApelido"> Codenome:</label>
    <input type="text" name="InputApelido" id="InputApelido">
    <input type="submit" value="Validar">
    <input type="reset" value="excluir">
    </form>
</body>
</html>