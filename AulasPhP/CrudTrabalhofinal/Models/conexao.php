<?php
$banco = mysqli_connect("localhost", "root", "", "db_pousada") or die("Não foi possível conexão com BD.");
if (!$banco) {
    echo ("Causa do erro:" . mysqli_connect_error());
}
?>