<?php

print "O print funciona!\n";

$tela = fopen("php://stdout", 'w');
fwrite($tela, "Jeito desnecessarimente complexo de se escrever!\n");