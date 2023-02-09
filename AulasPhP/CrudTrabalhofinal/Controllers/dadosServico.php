<?php
include('../Models/classDados.php');

$cd = new dadosServicos;
echo ('<br><br>');
echo ($cd->nome = $_POST['nome']);
echo ('<br><br>');
echo ($cd->telefone = $_POST['telefone']);
echo ('<br><br>');
echo ($cd->email = $_POST['email']);
echo ('<br><br>');
echo ($cd->data = $_POST['dataEntrada']);
echo ('<br><br>');
echo ($cd->data = $_POST['dataSaida']);
echo ('<br><br>');
echo ('Pousada -->' . $cd->pousada = $_POST['pousada']);
echo ('<br><br>');
echo ('total de pessoas -->' . $cd->pessoa = $_POST['totalPessoa']);
echo ('<br><br>');
echo ('total de quartos -->' . $cd->quartos = $_POST['quartos']);

if ($cd->pousada == 1) {
        $cd->inserirDadosPousada1();
} else {
        $cd->inserirDadosPousada2();
}
?>