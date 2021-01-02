<?php

$string = "abcabbbbb";

$word = "";
$count = 0;

for ($i = 0; $i < strlen($string); $i++){
    if($string[$i] !== $string[$i + 1]){
        $word .= $string[$i];
        $lastWord = $word;
        $count++;
    } else {
        $word = "";
        $count = 0;
    }
} // nu e solutia, incercam eu pe aici poate imi venea ceva
//Solutie facuta de Robert