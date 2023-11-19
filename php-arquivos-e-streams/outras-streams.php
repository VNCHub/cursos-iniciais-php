<?php

//fazer um request para um protocolo http
$request = file_get_contents('http://swapi.dev/api/films/4/');
echo $request . PHP_EOL;

//fazer um request para um arquivo zip
$context = stream_context_create([
    'zip' => [
        'password' => '12345'
    ]
    ]);
$zipRequest = file_get_contents('zip://ArquivosApoio/zip-com-senha.zip#lista-teste.txt', false, $context);
echo $zipRequest . PHP_EOL;