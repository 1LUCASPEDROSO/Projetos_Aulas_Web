<?php
        include('../Models/classDados.php');  
        $cd = new dadosServicos;        
        $cd->nome = $_POST['nome'];
        $cd -> telefone = $_POST['telefone'];
        $cd -> email = $_POST['email'];
        $cd -> data = $_POST['data'];      
        $cd -> pousada = 2;
        $cd->pessoa = $_POST['totalPessoa'];    
        $cd->quartos = $_POST['quartos'];

        if($cd -> pousada = '1'){
        $cd->inserirDadosPousada1();
        } elseif($cd -> pousada = '2') {
                $cd->inserirDadosPousada2();
        }    
?>

     

