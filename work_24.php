<?php
function findSecondLargestNumber($array) {
    rsort($array);
    
    if (count($array) >= 2) {
        return $array[1]; 
    } else {
        return null; 
    }
}

$numbers = [10, 20, 30, 40, 50];
$secondLargest = findSecondLargestNumber($numbers);
echo "Второе по величине число: " . $secondLargest; 