<?php

$s1 = "and";
$s2 = "ffr";


function check($arr, $arr2) {
    $match = similar_text($arr, $arr2);

    if($match !== 0){
        return "YES";
    } else {
        return "NO";
    }
}
echo check($s1, $s2);
