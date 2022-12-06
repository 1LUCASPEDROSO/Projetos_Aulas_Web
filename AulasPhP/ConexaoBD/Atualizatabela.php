<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>    
    <title>Listar contatos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>   
</head>
<body>
<?php
include('conexao.php');
$id = $_POST['registro'];
$nome = $_POST["nome"];
$telCelular = $_POST["tel_celular"];
$telFixo = $_POST["tel_fixo"];
$email = $_POST["email"];
$anotacao = $_POST["anotacao"];
$sql = mysqli_query($banco,"update contatos set nome='$nome', tel_celular='$telCelular', tel_fixo='$telFixo',  email='$email',  anotacao='$anotacao' where id_contatos=$id");
if($banco -> affected_rows == 1)
{
    echo("banco atualizado com sucesso");
    echo("<meta http-equiv='refresh' content ='2;URL=index.html'>");
} else {
    echo ('contato não pode ser atualizado' . mysqli_connect_error());
}


?>
</body>
</html>