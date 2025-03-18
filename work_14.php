<?php
function capitalizeString($str) {
    return ucwords($str);
}

$inputString = "привет мир!";
$capitalizedString = capitalizeString($inputString);
echo $capitalizedString;