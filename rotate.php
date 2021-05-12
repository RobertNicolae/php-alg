<?php


$a = [1, 2, 3, 4, 5];
$d = 2;

function rotLeft($a, $d) {
    for($i = 1; $i <= $d; $i++) {
        $first = array_shift($a);
        $a[] = $first;
    }
    return $a;
}

var_dump(rotLeft($a, $d));
