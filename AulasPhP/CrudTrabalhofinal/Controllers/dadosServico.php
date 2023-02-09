<?php
include('../Models/classDados.php');

$cd = new dadosServicos;
$cd ->nome = $_POST['nome'];
$cd->telefone = $_POST['telefone'];
$cd->email = $_POST['email'];
$cd->dataEntrada = $_POST['dataEntrada'];
$cd->dataSaida = $_POST['dataSaida'];
$cd->pousada = $_POST['pousada'];
$cd->pessoa = $_POST['totalPessoa'];
$cd->quartos = $_POST['quartos'];
if ($cd->pousada == 1) {
        $cd->inserirDadosPousada1();
} else {
        $cd->inserirDadosPousada2();
}
?>