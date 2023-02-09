<?php
include('../Models/classDadosLogin.php');
$CDL = new dadosLogin;
echo ('email -> ' . $CDL->login = $_POST['email']);
echo ('senha ->' . $CDL->senha = $_POST['senha']);
$CDL->realizarLogin();
?>