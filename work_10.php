<?php
function findMaximum($numbers) {
    if (empty($numbers)) {
        return null; 
    }
    $maxNumber = $numbers[0]; 
    foreach ($numbers as $num) {
        if ($num > $maxNumber) {
            $maxNumber = $num;
        }
    }
    return $maxNumber;
}

$array = [3, 5, 2, 8, 1];
$result = findMaximum($array);
echo $result;