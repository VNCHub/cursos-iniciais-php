<?php

$streamTeclado = fopen('php://stdin', 'r');
$file = 'ArquivosApoio/lista-teste.txt';

// Imprime conteudo já existente no arquivo
$output = file_get_contents($file);
echo $output . PHP_EOL . "Digite a próxima linha: ";

// Lê o teclado e adiciona linha no arquivo
$novalinha = trim(fgets($streamTeclado));
// ou trim(fgets(STDIN))
file_put_contents($file, "\n$novalinha", FILE_APPEND);

$output = file_get_contents($file);
echo $output . PHP_EOL;

