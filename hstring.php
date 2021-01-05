<?php
function lengthOfLongestSubstring(string $s): int
{
    $sLen = strlen($s);

    //Initializez o mapa de frecventa, unde daca este setata cheia x, inseamna ca a fost folosit caracterul x in substring
    $freqMap = [];
    //lungimile sunt 0, pentru inceput
    $currentLength = 0;
    $maxLength = 0;

    //parcurg string-ul meu, incercand sa formez un substring fara caractere duplicate cat mai mare
    for ($i = 0; $i < $sLen; ++$i) {
        //Am gasit un subsir mai mare
        if($maxLength < $currentLength) {
            $maxLength = $currentLength;
        }
        //Caracterul curent este deja folosit in substring-ul format anterior, deci voi face unul nou
        if (isset($freqMap[$s[$i]])) {
            $currentLength = 0;
            $freqMap = [];
        }
        //Adaug un nou caracter un substring si cresc marimea
        ++$currentLength;
        $freqMap[$s[$i]] = true;
    }

    return $maxLength;
}

$s = "abcabcbb";
echo lengthOfLongestSubstring($s);