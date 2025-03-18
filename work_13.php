<?php
function sortArray($arr) {
    sort($arr);
    return $arr;
}

$inputArray = [5, 3, 8, 1, 2];
$sortedArray = sortArray($inputArray);
print_r($sortedArray);