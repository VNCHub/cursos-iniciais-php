<?php

$pathTXT = "ArquivosApoio/lista-teste.txt";
$arquivoTXT = file($pathTXT);

$pathCSV = "ArquivosApoio/arquivoCSV.csv";
$arquivoCSV = fopen($pathCSV, 'w');

foreach ($arquivoTXT as $row){
    $explodedRow = explode(". ", $row);
    fwrite($arquivoCSV, implode(',', $explodedRow));
}

fclose($arquivoCSV);