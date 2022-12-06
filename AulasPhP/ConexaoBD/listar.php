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
$sql = mysqli_query($banco,"select * from contatos;");
$linhas = mysqli_num_rows($sql);

echo("
        <p>Lista de contatos</p><br><br>
        <p>alksd</p>
        <table>
        <tr>
        <td>Registro</td>
        <td>Nome</td>
        <td>Telefone 1</td>
        <td>Telefone fixo</td>
        <td>Email</td>
        <td>Anotação</td>
        </tr>
       
    ");
for ($i = 0; $i < $linhas; $i++)
{
    $registro = mysqli_fetch_row($sql);
    echo("
        <tr>
        <td>$registro[0]</td>
        <td>$registro[1]</td>
        <td>$registro[2]</td>
        <td>$registro[3]</td>
        <td>$registro[4]</td>
        <td>$registro[5]</td>
        </tr>
      ");
} //  for para percorrer linhas do banco e listar todos os dados
echo ("</table>");
mysqli_close($banco)
?>



</body>
</html>