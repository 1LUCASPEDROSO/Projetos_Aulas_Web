<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação IMC</title>
</head>
<body>
    <form action="./php-BD/inserirNovoPeso.php" method="post">
        <input type="float" name="peso-atual" id="peso-atual">
        <input type="float" name="altura-atual" id="altura-atual">
        <input type="submit" value="Enviar novos dados">
    </form>
    <a href="Index.html"><button>Voltar a pagina inical</button></a>
    <?php
include("conexao.php");

$peso_atual = $_POST["peso-atual"];
$altura_atual = $_POST["altura-atual"];
//$sexo = $_POST["sexo"];
    $teste = $_COOKIE['login'];

    echo ($teste);
$sql = mysqli_query($banco, "insert into usuarios(email,peso,altura) values('$teste',$peso_atual,$altura_atual);");
if ($sql) {
    echo (" novos dados de peso e altura  cadastrados  com sucesso.");
    
} else {
    echo ("Não foi possível cadastrar, tente novamente.");
    echo ("<br> Causa do erro: " . mysqli_connect_error());
}
mysqli_close($banco);
?>
</body>
</html>















