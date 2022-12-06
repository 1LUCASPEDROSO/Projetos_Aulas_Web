<?php
    $arquivo = 'dados.json';
    $dados = file_get_contents($arquivo);
    header('Content-type:application/json;charset=utf-8');
    echo ($dados);
?>