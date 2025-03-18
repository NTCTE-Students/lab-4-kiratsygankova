<?php
function formatDate($dateString) {
    $date = new DateTime($dateString);
    
    return $date->format('d/m/Y');
}

$inputDate = '2023-09-21';
$formattedDate = formatDate($inputDate);
echo "дата: $formattedDate";