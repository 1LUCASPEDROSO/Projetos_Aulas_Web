<?php
$banco = mysqli_connect("localhost", "root", "", "cadastro") or die("Não foi possível conexão com BD.");
if (!$banco) {
    echo ("Causa do erro:" . mysqli_connect_error());
} else {
    echo ("Parabéns!! Conexão ao BD 'cadastro' ocorreu normalmente.<br><br>");
}
?>