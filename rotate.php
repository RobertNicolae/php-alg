<?php


$a = [1, 2, 3, 4, 5];
$d = 2;

function rotLeft($a, $d)
{
    $result = [];
    for($i = $d; $i < count($a); $i++){
        $result[] = $a[$i];
    }
    for($i = 0; $i < $d; $i++){
        $result[] = $a[$i];
    }
    return $result;
}

var_dump(rotLeft($a, $d));