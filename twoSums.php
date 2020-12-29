<?php
$nums = [2, 7, 11, 15];
$target = 18;

function check($nums, $target)
{
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] === $target) {
                return [$i, $j];
            }
        }
    }
}

var_dump(check($nums, $target));
