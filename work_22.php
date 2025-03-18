<?php
function calculateAverage($numbers) {
    if (empty($numbers)) {
        return null; 
    }

    $sum = array_sum($numbers); 
    $count = count($numbers); 

    return $sum / $count;      
}

$array = [1, 2, 3, 4, 5];
$average = calculateAverage($array);
echo "Среднее арифметическое массива равно: " . $average;
