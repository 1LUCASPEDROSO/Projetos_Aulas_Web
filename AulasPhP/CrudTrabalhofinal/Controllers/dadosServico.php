<?php
        include('../Models/classDados.php');  
        $cd = new dadosServicos;
        $cd->nome = $_POST['nome'];
        $cd -> telefone = $_POST['telefone'];
        $cd -> email = $_POST['email'];
        $cd -> data = $_POST['data'];
        $cd -> pousada = $_POST['pousada'];
        if($pousada = 1){
                $cd->inserirDadosPousada1();
        } else {
                 $cd->inserirDadosPousada2();
        }    
?>

     

