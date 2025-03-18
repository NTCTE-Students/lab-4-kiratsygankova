<?php
function countWords($str) {
    $words = preg_split('/\s+/', trim($str));
    return count($words);
}

$inputString = "Это пример строки с несколькими словами.";
$result = countWords($inputString);
echo "Количество слов: " . $result;