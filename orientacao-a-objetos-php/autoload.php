<?php 

spl_autoload_register(function (string $nomeClasse) {
    $caminhoArquivo = substr($nomeClasse, 6, strlen($nomeClasse));
    $caminhoArquivo = str_replace('\\',  DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});