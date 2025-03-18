<?php
function isPalindrome($str) {
    $cleanStr = strtolower(str_replace(' ', '', $str));
    return $cleanStr === strrev($cleanStr);
}

$inputString = "A man a plan a canal Panama";
$result = isPalindrome($inputString);
echo $result ? 'Палиндром' : 'Не палиндром';