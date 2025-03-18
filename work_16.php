<?php
function stringLength($string) {
    $length = 0;
    
    while (isset($string[$length])) {
        $length++;
    }
    return $length;
}

$inputString = "Привет, мир!";
$result = stringLength($inputString);
echo $result;