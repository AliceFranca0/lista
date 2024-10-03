<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body> 

@php
$num = array (20, 300, 600, 900);

print_r($num);

$armazenaArr = array ();
@endphp
@foreach ($num as $num) 
    @php
    $armazenaArr[] = $num * $num;
    echo "<br>";
    @endphp
    @endforeach
    
    @foreach
    @php
    if($armazenaArr[3] >= 1000) {
        print_r($armazenaArr[3]);
    }
    else {
        print_r($armazenaArr);
    }   
@endphp
@endforeach
</body>
</html>