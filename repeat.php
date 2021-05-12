<?php

$s = "PWWKEW";
$slen = strlen($s);
$map = [];
$currentLength = 0;
$maximLength = 0;

for ($i = 0; $i < $slen; $i++){

    if($maximLength < $currentLength){
        $maximLength = $currentLength;
    }
    if(isset($map, $slen[$i])){
        $currentLengt = 0;
        $map = [];
    }
    $currentLength++;
    $map[$s[$i]] = true;
}

var_dump($currentLength);
