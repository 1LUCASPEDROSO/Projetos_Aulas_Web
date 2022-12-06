!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>    
    <title>apagar contatos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>   
</head>
<body>
<?php
include('conexao.php');
$registro = $_POST["registro"];
$sql = mysqli_query($banco, "delete from contatos where id_contatos =$registro");
 if($sql)
 {
    echo("Contato apagado com sucesso");
    echo("<meta http-equiv='refresh' content ='5;URL=index.html'>");
 } else {
    echo("Erro ao apagar contato.");
    echo ("<br> causa:".mysqli_connect_error());
}
mysqli_close($banco);
?>



</body>
</html>