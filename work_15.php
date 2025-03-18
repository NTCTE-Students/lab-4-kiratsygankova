<?php
function sumOfDigits($number) {
    $number = abs($number);
    $sum = 0;

    foreach (str_split($number) as $digit) {
        $sum += (int)$digit; 
    }
    return $sum;
}

$inputNumber = 12345;
$result = sumOfDigits($inputNumber);
echo $result;