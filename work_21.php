<?php
function isPrime($num) {
    if ($num <= 1) {
        return false; 
    }
    if ($num == 2 || $num == 3) {
        return true; 
    }
    if ($num % 2 == 0) {
        return false; 
    }
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            return false; 
        }
    }
    return true; 
}

$number = 17;
if (isPrime($number)) {
    echo "$number — простое число.";
} else {
    echo "$number — не простое число.";
}
