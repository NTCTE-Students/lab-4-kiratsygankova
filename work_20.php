<?php
function factorial($n) {
    $result = 1;
    
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    
    return $result;
}

$number = 5;
$factorialValue = factorial($number);
echo "Факториал числа $number равен $factorialValue\n";
