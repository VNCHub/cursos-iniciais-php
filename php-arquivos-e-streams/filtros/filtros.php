<?php

require 'MeuFiltro.php';

//Uso de filtros
$request = fopen('lista-teste.txt', 'r');

stream_filter_append($request, "string.toupper");

//Criando um filtro próprio
stream_filter_register('string.itemFilter', MeuFiltro::class);
stream_filter_append($request, "string.itemFilter");

while(!feof($request)) {
    $curso = fgets($request);
    echo $curso;
}

fclose($request);