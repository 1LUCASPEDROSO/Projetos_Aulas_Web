<?php
        include('../Models/classDados.php');  
        $cd = new dadosServicos;
        $cd->nome = $_POST['nome'];
        $cd -> telefone = $_POST['telefone'];
        $cd -> email = $_POST['email'];
        $cd -> data = $_POST['data'];
        $cd -> pousada = $_POST['pousada'];
        $cd->inserirDados();
?>

     

