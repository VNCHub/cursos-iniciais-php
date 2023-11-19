<?php

$file = fopen("ArquivosApoio/decode.csv", 'w');

$rows = [
    "Nome, Salário, Cidade",
    "João, € 2000.00, São Paulo",
    "Vinícius, R$ 300.00, Bahia",
    "Graça, $ 4000.00, Espirito Santo"
];

foreach ($rows as $row) {
    fputs($file, mb_convert_encoding($row, 'Windows-1252', 'UTF-8') . PHP_EOL);
}



