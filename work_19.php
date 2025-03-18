<?php
function removeDuplicates($array) {
    return array_unique($array);
}

$array = [1, 2, 3, 4, 4, 5, 6, 7, 7];
$result = removeDuplicates($array);

echo "Итог:";
print_r($result);

echo "Итог: " . json_encode($result);
