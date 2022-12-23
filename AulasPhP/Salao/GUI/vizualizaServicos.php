<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <title>Serviços</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php
    include('../Models/conexao.php');
    include('../Models/classDadosServicos.php');
    $cd = new dadosServicos;
    $querry = ("select  id_servico,nome,telefone,email,data_servico,hora from servicos  where empregado ='". $cd->empregado."';");
    $sql = mysqli_query($banco, $querry);
    echo ("teste -->" . $cd->empregado);
        $linhas = mysqli_num_rows($sql);
        echo ("
            <h1>Lista de servicos</h1><br><br>
            <table class='w3-table-all w3-hoverable'>
            <tr>
            <td> N* serviço</td>
            <td>Nome cliente</td>
            <td>Telefone cliente</td>
            <td>Email cliente </td>
            <td>Data do serviço </td>
            <td>Hora </td>
            </tr>
        ");
        for ($i = 0; $i < $linhas; $i++) {
            $registro = mysqli_fetch_row($sql);
            echo ("
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
    mysqli_close($banco);

    ?>
</body>
</html>