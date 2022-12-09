<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
setcookie('login',$email, time() + (86400 * 30), "/");
include('conexao.php');
$sql = mysqli_query($banco,"select email, senha from usuarios where email='$email' and senha='$senha';");
$linhas = mysqli_num_rows($sql);
for ($i = 0; $i <= $linhas; $i++)
{
    $registro = mysqli_fetch_row($sql);
    if($linhas == 1)
    {
        header('Location:../teste.html');
    } else {
        header('Location:../cadastro.html');
    }
} //  for para percorrer linhas do banco e valifar senha e email 
mysqli_close($banco);
?>

