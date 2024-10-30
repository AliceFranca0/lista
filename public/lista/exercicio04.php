<?php 

echo "Digite o índice de poluição medido: ";
$indice = floatval(fgets(STDIN));

switch (true) {
    case ($indice >= 0.05 && $indice <= 0.25):
        echo "Índice de poluição dentro do nível aceitável.";
        break;
    case ($indice >= 0.3 && $indice < 0.4):
        echo "Atenção: Indústrias do 1º grupo devem suspender suas atividades.";
        break;
    case ($indice >= 0.4 && $indice < 0.5):
        echo "Atenção: Indústrias do 1º e 2º grupos devem suspender suas atividades.";
        break;
    case ($indice >= 0.5):
        echo "Atenção: Todos os grupos de indústrias devem suspender suas atividades.";
        break;
    default:
        echo "Índice de poluição fora da faixa conhecida. Verifique a leitura.";
}
?>
