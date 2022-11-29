
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container-fluid">
<p class="h1">Calculadora Online</p>
<p class="h2">Resultado</p>
<?php
    if(isset($_GET['resposta']))
    {
        echo('<p>'.$_GET['resposta'].'</p>');
    }
    else
    {
        header('location:Guicalculadora.html');
    }

?>
<p>
<a href="GuiCalculadora.html">Calcular novamente</a>
</p>
</div>
</body>