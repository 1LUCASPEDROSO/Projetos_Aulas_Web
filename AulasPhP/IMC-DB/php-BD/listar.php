<?php
include('conexao.php');
$sql = mysqli_query($banco,"select id, senha from cadastro;");
$linhas = mysqli_num_rows($sql);

for ($i = 0; $i < $linhas; $i++)
{
    $registro = mysqli_fetch_row($sql);
    
} //  for para percorrer linhas do banco e listar todos os dados
mysqli_close($banco)
?>