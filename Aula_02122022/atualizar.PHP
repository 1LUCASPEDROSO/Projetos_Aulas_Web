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
$id = $_POST['registroatt'];
$sql = mysqli_query($banco,"select * from contatos where id_contatos=$id;");
$linhas = mysqli_num_rows($sql);

echo("<p> Contato selecionado</p><br><br>
 <form method='post' action='Atualizatabela.php'>
 <table>
");
for ($i = 0; $i < $linhas; $i++)
{
    $registro = mysqli_fetch_row($sql);
    echo(" <tr>
            <td>Registro</td>
            <td><input type='text' name='registro' value='$registro[0]' readonly></td>
            </tr>
            <tr>
            <td>Nome</td>
            <td><input type='text' name='nome' value='$registro[1]' ></td>
            </tr>   
            <tr>
            <td>tel_celular</td>
            <td><input type='text' name='tel_celular' value='$registro[2]' ></td>
            </tr>
            <tr>
            <td>tel_fixo</td>
            <td><input type='text' name='tel_fixo' value='$registro[3]' ></td>
            </tr>
            <tr>
            <td>email</td>
            <td><input type='text' name='email' value='$registro[4]' ></td>
            </tr>
            <tr>
            <td>Anotação</td>
            <td><textarea cols='25' rows='8' name='anotacao'>$registro[5]</textarea></td>
            </tr>
        "); 
}
echo("
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
    <td><input type='submit' value='Cadastrar novos dados'</td>
</tr>
</table>
</form>
");
mysqli_close($banco)








?>
</body>
</html>