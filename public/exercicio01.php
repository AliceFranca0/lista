<?php 

$num = array (20, 300, 600, 900);

print_r($num);

$armazenaArr = array ();


foreach ($num as $num) {
    $armazenaArr[] = $num * $num;
    echo "<br>";
}
    if($armazenaArr[3] >= 1000) {
        print_r($armazenaArr[3]);
    }
    else {
        print_r($armazenaArr);
    }




