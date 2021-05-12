<?php



function checkPattern(string $pattern, string $string)
{
    $patternArr = [];
    $sum1 = 0;
    $sum2 = 0;
    for ($i = 0; $i < strlen($pattern); $i++) {
        $patternArr[] = $pattern[$i];
    }
    for ($i = 0; $i < count($patternArr) - 1; $i++) {
        if ($patternArr[$i] === $patternArr[$i + 1]) {
            $sum1 += 1;
        } else {
            $sum1 += 2;
        }
    }
    $stringArr = explode(" ", $string);
    for ($i = 0; $i < count($stringArr) - 1; $i++) {
        if ($stringArr[$i] === $stringArr[$i + 1]) {
            $sum2 += 1;
        } else {
            $sum2 += 2;
        }
    }
    if ($sum1 === $sum2) {
        return true;
    } else {
        return false;
    }

}

echo checkPattern("aabb", "cat cat cat dog");





