<?php

$s1 = "and";
$s2 = "ffr";


function check($arr, $arr2) {
    $lettersMap = [];
    for ($i = 0; $i < strlen($arr); $i++){
        $lettersMap[$arr[$i]] = true;
    }
    for($i = 0; $i < strlen($arr2); $i++){
        if(isset($lettersMap[$arr2[$i]])){
            return "YES";
        }
    }
    return "NO";
}
echo check($s1, $s2);
