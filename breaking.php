<?php
$scores = [10, 5, 20, 20, 4, 5, 2, 25, 1];
$countMin = 0;
$countMax = 0;
$maxRecord = $scores[0];
$minRecord = $scores[0];


foreach ($scores as $score) {
    if ($score > $maxRecord){
        $maxRecord = $score;
        $countMax++;
    } else if($score < $minRecord){
        $minRecord = $score;
        $countMin++;
    }
}
var_dump([$countMax, $countMin]);