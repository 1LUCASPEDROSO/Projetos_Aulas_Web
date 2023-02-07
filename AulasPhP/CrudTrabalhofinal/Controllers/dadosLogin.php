<?php
 include('../Models/classDadosLogin.php');
    $CDL = new dadosLogin;
    $CDL->$_POST['email'];
    $CDL->$_POST['senha'];
    $CDL ->realizarLogin();
?>