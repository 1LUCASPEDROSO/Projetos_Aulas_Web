<?php
$jsondata = '[
    {"nome": "lucas","idade":"20","UC":"Desenvolver-backend"},
    {"nome": "thiago","idade":"32","UC":"Desenvolver-backend"},
    {"nome": "1drakoon1","idade":"20","UC":"Desenvolver-backend"},
    {"nome": "gabe-monta","idade":"19","UC":"Desenvolver-backend"},
    {"nome": "Gilmar","idade":"46","UC":"Desenvolver-backend"},
    {"nome": "fernando","idade":"1745","UC":"Ddos","champion":"fallen"}
]';
// criando variavel para decodificar Json e converter dados para um array
$JsonDescodificando = json_decode($jsondata,true);

// criando arquivo CSV
$csv = 'alunos.csv';

// criando variavel ponteiro para apontar posições no Json
$file_pointer = fopen($csv,'w');

// unir array json com um arquivo
foreach($JsonDescodificando as $i)
{
    fputcsv($file_pointer, $i);
}
// fechando ponteiro 
    fclose($file_pointer);
?>