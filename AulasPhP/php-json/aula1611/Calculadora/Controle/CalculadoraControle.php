<?php

    if($_POST){
        include '../Classes/Calculadora.class.php';
        $cal = new Calculadora;
        $cal->valor1 = $_POST['txtvalor1'];
        $cal->valor2 = $_POST['txtvalor2'];
        $cal->operacao = $_POST['rdoperacao'];
        $res = $cal->calcular();
        header('location:../GUI/GuiResultado.php?resposta='.$res);
    }
    else
    {
     header('location:../GUI/GuiCalculadora.html');   
    }

?>