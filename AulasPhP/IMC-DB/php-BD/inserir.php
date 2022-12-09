<?php
include("conexao.php");
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$sexo = $_POST["sexo"];

$sql = mysqli_query($banco, "insert into usuarios values(null,'$email','$senha','$nome','$idade','$peso','$altura','$sexo');");
if ($sql) {
    echo (" cadastrado  com sucesso.");
    echo ("<a href='Index.html'><button>Voltar a pagina inical</button></a>");
} else {
    echo ("Não foi possível cadastrar, tente novamente.");
    echo ("<br> Causa do erro: " . mysqli_connect_error());
}
mysqli_close($banco);
?>