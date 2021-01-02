<?php
$scores = [10, 5, 20, 20, 4, 5, 2, 25, 1];
$countMin = 0;
$countMax = 0;
$firstMatch = $scores[0];
$lastBreak = $scores[0];
$lastLow = $scores[1];



for($i = 0; $i < count($scores); $i++){
    if($scores[$i] < $firstMatch && $scores[$i] !== $lastLow){
        $countMin++;
        $lastLow = $scores[$i];
    } else if ($scores[$i] > $firstMatch && $scores[$i] > $lastBreak){
        $countMax++;
        $lastBreak = $scores[$i];
    }

}
var_dump([$countMax, $countMin]);