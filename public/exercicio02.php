<?php

echo "Digite um número inteiro: ";
$inserir = trim(fgets(STDIN));

if (!filter_var($inserir, FILTER_VALIDATE_INT) === false) {
    $num = intval($inserir);

    if ($num % 2 == 0) {
        $parImpar = "par";
    } else {
        $parImpar = "ímpar";
    }

    if ($num > 0) {
        $posiNeg = "positivo";
    } else if ($num < 0) {
        $posiNeg = "negativo";
    } else {
        $posiNeg = "zero";
    }

    echo "O número $num é $parImpar e $posiNeg.\n";
} else {

    echo "Erro: Por favor, insira um número inteiro.\n";
}
