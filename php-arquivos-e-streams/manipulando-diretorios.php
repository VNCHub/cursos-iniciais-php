<?php

function Principal(){
    $d = dir('.');

    echo "Handle: " . $d->handle . PHP_EOL;
    echo "Path: " . $d->path . PHP_EOL;

    PesquisaRecursiva($d, 0);
    $d->close();
}

function PesquisaRecursiva(Directory $d, int $spaces){
    while (false !== ($entry = $d->read())) {
        if($entry == "." || $entry == ".."){
            continue;
        }
        for ($i = 0; $i < $spaces * 4; $i++){
            echo "-";
        }
        echo $entry."\n";
        if(is_dir($entry)){
            $subDir = dir("$entry");
            PesquisaRecursiva($subDir, $spaces + 1);
        }
    }
}

Principal();

?>