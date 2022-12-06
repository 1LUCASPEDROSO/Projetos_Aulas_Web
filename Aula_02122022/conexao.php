<?php

$banco = mysqli_connect("localhost","root","","manha_php") or die("Não foi possível conexão com BD.");
if(!$banco)
{
    echo ("Causa do erro:".mysqli_connect_error());
}
else
{
    echo ("Parabéns!! Conexão ao BD 'manha_php' ocorreu normalmente.<br><br>");
}

?>