<?php
    include('../Models/classDadosLogin.php');
    include('../Models/classDados.php');
    $CDL = new dadosLogin;
    $CDL->$_POST['email'];
    $CDL->$_POST['senha'];
    $CDL ->realizarLogin();
    $cd->listarOcupacoespousada1();
    $cd->listarOcupacoespousada2();
?>