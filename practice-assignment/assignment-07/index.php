<?php


$vowels = ['a', 'e', 'i', 'o', 'u'];


echo "Enter a single character: ";
$char = trim(fgets(STDIN)); 


if (strlen($char) !== 1) {
    echo "Error: Please enter only a single character.\n";
    exit;
}

$char = strtolower($char);

$is_vowel = false;

foreach ($vowels as $vowel) {
    if ($char === $vowel) {
        $is_vowel = true;
        break; 
    }
}


if ($is_vowel) {
    echo "$char is a vowel.<br>";
} else {
    echo "$char is a consonant.<br>";
}

?>
