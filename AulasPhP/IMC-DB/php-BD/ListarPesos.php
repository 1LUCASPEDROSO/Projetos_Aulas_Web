<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
<?php
include("conexao.php");
$teste = $_COOKIE['login'];
$sql = mysqli_query($banco, "select  peso from usuarios where email='$teste';");
$linhas = mysqli_num_rows($sql);
for ($i = 0; $i < $linhas; $i++) {
    $registro = mysqli_fetch_row($sql);
}// for para percorrer colunas do banco 
$arrayvazio[] = array('peso'=>$registro[0]);
$x = json_encode($arrayvazio);
 echo ("teste".$x);
 $arquivo = 'dados.json';
 $file_pointer = fopen($arquivo,'w');
    fputs($file_pointer, $x);
// fechando ponteiro 
fclose($file_pointer);

?>
<a href="javascript:mostrarDados()"> testando</a>
<script src="../js/Grafico.js"></script>
</body>
</html>