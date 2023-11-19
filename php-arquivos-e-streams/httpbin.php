<?php

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content'=> 'Teste do corpo da requisição',
    ]
    ]);

echo file_get_contents('https://httpbin.org/post', false, $context);