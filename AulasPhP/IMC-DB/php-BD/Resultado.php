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
  $sql = mysqli_query($banco, "select peso,altura from usuarios where email='$teste' and id_pessoa = (select max(id_pessoa)  from usuarios); ;");
  $linhas = mysqli_num_rows($sql);

  echo("
  <h1> Lista de dados</h1>
  <table>
  <tr>
  <td>Peso</td>
  <td>Altura</td>
  </tr>
 ");
for ($i = 0; $i < $linhas; $i++)
{
    $registro = mysqli_fetch_row($sql);
     echo ("
     <tr>
     <td>$registro[0]</td>
     <td>$registro[1]</td>
     </tr>
     "); 
     $resultado =  $registro[0] / ($registro[1] * $registro[1]);
     echo ('imc --> '.$resultado);
     header('location:Listarpesos.php');
} //  for para percorrer linhas do banco e listar todos os dados

mysqli_close($banco);
 echo("</table>");
?>
</body>
</html>