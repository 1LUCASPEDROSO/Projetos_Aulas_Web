<?php
$id = $_POST['id'];
$senha = $_POST['senha'];

include('conexao.php');
$sql = mysqli_query($banco,"select id_pessoa, senha from usuarios;");
$linhas = mysqli_num_rows($sql);
echo ('1');
for ($i = 0; $i <= $linhas; $i++)
{
    $registro = mysqli_fetch_row($sql);
    echo ('2');
    if(!$linhas = 1)
    {
        echo ('3');
        header('Location:../teste.html');
    } else {
        echo ('4');
        header('Location:../cadastro.html');
    }


} //  for para percorrer linhas do banco e listar todos os dados
mysqli_close($banco);


