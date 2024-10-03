<?php

$tamanho = 500;

$array = [];

for ($i = 0; $i < $tamanho; $i++) {
    $array[] = mt_rand();
}

echo "Números gerados: \n";
print_r($array);

$maior = max($array);
echo "Maior valor: $maior\n";

$menor = min($array);
echo "Menor valor: $menor\n";

$soma = array_sum($array);
$media = $soma / count($array);
echo "Média dos valores: $media\n";
