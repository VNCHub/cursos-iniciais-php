<?php

$file = fopen('arquivo-criado.txt', 'w');
/*
modos de abrir:
    * r = read
    * w = write
    * a = append
    ou outros... Ver na documentação do fopen.
*/

$frase = "Está frase será colocada dentro do arquivo!";

fwrite($file, $frase);

//forma facilitada
$frase2 = "\nEstá será a segunda frase do arquivo!";
file_put_contents('arquivo-criado.txt', $frase2, FILE_APPEND); // Para mais de uma flag usar o "|"

fclose($file);