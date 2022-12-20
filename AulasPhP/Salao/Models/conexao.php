<?php
$banco = mysqli_connect("localhost", "root", "", "DB_salao") or die("Não foi possível conexão com BD.");
if (!$banco) {
    echo ("Causa do erro:" . mysqli_connect_error());
} else {
    echo ("Parabéns!! Conexão ao BD 'salao' ocorreu normalmente.<br><br>");
}
?>