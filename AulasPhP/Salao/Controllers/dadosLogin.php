<?php

include('../Models/ClassLogin.php');
$L = new Login;

$L -> email = $_POST['emailLogin'];
$L->  senha = $_POST['senhaLogin'];
$L->realizarLogin();

?>