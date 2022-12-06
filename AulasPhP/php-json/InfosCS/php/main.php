<?php
$arquivo = './Json/Dados.json';
$dados = file_get_contents($arquivo);
header("Content-type:application/json;charset=utf-8");
echo($dados);
?>