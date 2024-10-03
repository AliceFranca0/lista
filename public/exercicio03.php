<?php

echo "Digite o código do operário: ";
$c = trim(fgets(STDIN));

echo "Digite o número de horas trabalhadas: ";
$horasTrabalhadas = intval(fgets(STDIN));

$valorHora = 10.00;
$valorHoraExtra = 20.00;

$salarioBase = 0;
$salarioExcedente = 0;

if ($horasTrabalhadas <= 50) {
    $salarioBase = $horasTrabalhadas * $valorHora;
    $salarioExcedente = 0;
} else {
    $salarioBase = 50 * $valorHora;
    $horasExcedentes = $horasTrabalhadas - 50;
    $salarioExcedente = $horasExcedentes * $valorHoraExtra;
}

$salarioTotal = $salarioBase + $salarioExcedente;

echo "Código do operário: $c\n";
echo "Salário base: R$ " . number_format($salarioBase, 2, ',', '.') . "\n";
echo "Salário excedente: R$ " . number_format($salarioExcedente, 2, ',', '.') . "\n";
echo "Salário total: R$ " . number_format($salarioTotal, 2, ',', '.') . "\n";
?>
