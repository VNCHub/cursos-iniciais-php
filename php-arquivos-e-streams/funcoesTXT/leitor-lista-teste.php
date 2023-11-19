<?php

//ler linha a linha do arquivo
$file = fopen('lista-teste.txt', 'r');

while(!feof($file)) {
    $curso = fgets($file);
    echo $curso;
}

echo PHP_EOL;

//ler o arquivo todo
rewind($file); //reposiciona cursor no inicio
$arquivoEmString = fread($file, filesize('lista-teste.txt'));
echo $arquivoEmString . PHP_EOL;

fclose($file);

//forma facilitada
$file = file_get_contents("lista-teste.txt");
echo $file . PHP_EOL;