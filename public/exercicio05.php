<?php 

echo "Digite a idade do nadador: ";
$idade = intval(fgets(STDIN));

if ($idade >= 5 && $idade <= 7) {
    echo "Categoria: Infantil A";
} elseif ($idade >= 8 && $idade <= 11) {
    echo "Categoria: Infantil B";
} elseif ($idade >= 12 && $idade <= 13) {
    echo "Categoria: Juvenil A";
} elseif ($idade >= 14 && $idade <= 17) {
    echo "Categoria: Juvenil B";
} elseif ($idade >= 18) {
    echo "Categoria: Adultos";
} else {
    echo "Sem categoria para esta idade.\n";
}

