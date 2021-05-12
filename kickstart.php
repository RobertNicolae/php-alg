<?php
function kickStartCount(string $line): int
{
    $countInt = 0;
    $i = strpos($line, "KICK");
    while ($i !== false) {
        $j = strpos($line, "START", $i + 4);
        while ($j !== false) {
            $countInt++;
            $j = strpos($line, "START", $j + 5);
        }
        $i = strpos($line, "KICK", $i + 4);
    }
    return $countInt;
}

$testCases = [
    "AKICKSTARTPROBLEMNAMEDKICKSTART",
    "STARTUNLUCKYKICK",
    "KICKXKICKXSTARTXKICKXSTART"
];

$results = [];
foreach ($testCases as $testCase) {
    $results[] = kickStartCount($testCase);
}

foreach ($results as $i => $result) {
    echo "Case #" . ($i + 1) . ": " . $result . "\n";
}