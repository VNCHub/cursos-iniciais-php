<?php
function exibirNumerosImpares(){
    for($i = 0; $i < 100; $i++){
        if (($i % 2) != 0 ) {
            echo $i . " ";
        }
    }
    echo PHP_EOL . PHP_EOL;
}

function exibirTabuada($multiplicador){
    for($i = 1; $i < 11; $i++){
        $resultado = $multiplicador * $i;
        echo "$multiplicador x $i = $resultado";
        if ($i != 10) echo " | ";
        if ($i == 5) echo PHP_EOL;
    }
    echo PHP_EOL . PHP_EOL;
}

function calcularIMC($peso, $altura){
    $imc = $peso / $altura ** 2;
    $faixas = array(
        array('limite' => 16.9, 'resultado' => 'Muito abaixo do peso'),
        array('limite' => 18.4, 'resultado' => 'Abaixo do peso'),
        array('limite' => 24.9, 'resultado' => 'Peso normal'),
        array('limite' => 29.9, 'resultado' => 'Acima do peso'),
        array('limite' => 34.9, 'resultado' => 'Obesidade grau 1'),
        array('limite' => 40, 'resultado' => 'Obesidade grau 2'),
        array('limite' => PHP_FLOAT_MAX, 'resultado' => 'Obesidade grau 3')
    );
    
    foreach ($faixas as $faixa) {
        if ($imc < $faixa['limite']) {
            $resultado = $faixa['resultado'];
            break;
        }
    } 
    echo "Seu IMC é: $imc, e está classificado como: $resultado" . PHP_EOL;   
}

echo "1. Exibir na tela do usuário todos os número impares de 0 à 100" . PHP_EOL;
exibirNumerosImpares();

echo "2. Exibir tabuada de número a partir de determinado input" . PHP_EOL;
$multiplicador = readline("Digite um número: ");
exibirTabuada($multiplicador);

echo "3. Calcular IMC" . PHP_EOL;
$altura = readline("Digite a altura: ");
$peso = readline("Digite o peso: ");
calcularIMC($peso, $altura);