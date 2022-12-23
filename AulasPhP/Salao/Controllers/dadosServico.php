<?php
 
        include('../Models/classDadosServicos.php');
                
        $cd = new dadosServicos;
        $teste = $_POST['nome'];
        $cd->nome = $teste;
        
        $cd -> telefone = $_POST['telefone'];
        $cd -> email = $_POST['email'];
        $cd -> data = $_POST['data'];
        $cd -> hora = $_POST['hora'];
        $cd -> empregado = $_POST['Empregado'];
        $cd->inserirDados();
?>

     

