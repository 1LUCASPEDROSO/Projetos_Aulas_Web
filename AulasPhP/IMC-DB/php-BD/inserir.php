<?php
include("conexao.php");
$nome = $_POST["nome"];
$telCelular = $_POST["tel_celular"];
$telFixo = $_POST["tel_fixo"];
$email = $_POST["email"];
$anotacao = $_POST["anotacao"];

$sql = mysqli_query($banco, "insert into contatos values(null,'$nome','$telCelular','$telFixo','$email','$anotacao');");
if ($sql) {
    echo ("Contato cadastrado com sucesso.");
} else {
    echo ("Não foi possível cadastrar, tente novamente.");
    echo ("<br> Causa do erro: " . mysqli_connect_error());
}
mysqli_close($banco);
?>