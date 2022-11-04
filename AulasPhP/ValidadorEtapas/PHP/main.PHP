<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de cadastro</title>
</head>
<body>
    <?php
    $nome = $_POST["nomefiltrodados"];
    $escola = $_POST["Escolafiltrodados"];
    $senha = $_POST["Senhafiltrodados"];
    $datanascimento = $_POST["DataNascimentoFiltrodados"];
    $herofav = $_POST["favheroFiltrodados"];
    $cep = $_POST["Cepfiltradados"];
    $apelido = $_POST["InputApelido"];
    $flag =0;

    if(empty($nome) || $nome=="all might" || $nome=="aizawa")
    {
        $flag = 1;
        echo("<p>nome não passou</p>");
    }
    elseif(empty($escola) || !$escola=="u.a")
    {
        $flag =1;
        echo("<p>escola não passou</p>");
    }
    else{
    include "../MPDF60/mpdf.php";
    $DadosPdf ="
        <html>
        <body> 
        <center>
        <p align='center' style='font-size:40px; margin-bottom:120px; color:#006400;>
            DADOS PESSOAIS
        </p>
        <p><b>Nome:</b>$nome</p>
        <p><b>Escola</b>$escola</p>
        <p><b>senha:</b>$senha</p>
        <p><b>Data de nascimento:</b>$datanascimento</p>
        <p><b>Herói favorito:</b>$herofav</p>
        <p><b>CEP:</b>$cep</p>
        <p><b>Apelido:</b>$apelido</p>
        </center>
        </body>
        </html>
    ";
    $gerarPdf = "Dados.pdf";
    $pdf = new mPDF();
    $pdf -> WriteHTML($DadosPdf);
    $pdf -> Output();
    }
    ?>
</body>
</html>