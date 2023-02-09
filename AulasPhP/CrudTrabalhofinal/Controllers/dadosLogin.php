<?php
include('../Models/classDadosLogin.php');
$CDL = new dadosLogin;
$CDL->login = $_POST['email'];
$CDL->senha = $_POST['senha'];
$CDL->realizarLogin();
?>