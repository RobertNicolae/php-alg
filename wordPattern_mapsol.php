<?php

function checkPattern(string $pattern, string $words): bool {
    //Spargem string-ul $pattern in array (fiecare caracter este un element)
    $patternArr = str_split($pattern);

    //Spargem string-ul $words in array de cuvinte (fiecare cuvant este un element in array)
    $wordsArr = explode(' ', $words); //sparge dupa spatiu liber

    //aici o sa stocam valorile unice din pattern (pentru aabb, valorile unice sunt a si b)
    $patternsLetters = array_values(array_unique($patternArr)); //array_unique ia elementele unice, dar indexate gresit, array_values ia valorile din array si reindexeaza

    //idem pentru array-ul de cuvinte, le luam doar pe cele unice si reindexam
    $uniqueWords = array_values(array_unique($wordsArr));

    //avem o lista de litere unice, o lista de cuvinte unice, in ordinea in care apar
    //facem o mapa/array assoc, unde cheia va fi cuvantul, iar valoarea va fi litera din pattern (cat => a, dog => b)
    $map = [];
    // stim ca vom avea atatea cuvinte distincte cat litere distincte in pattern, conf cerintei (daca avem 2 litere de pattern, avem 2 cuvinte unice)
    for($i = 0; $i < count($patternsLetters); ++$i) {
        $map[$uniqueWords[$i]] = $patternsLetters[$i];
    }

    //acum parcurgem array-ul normal de cuvinte, care contine toate cuvintele ce apar in string, ca elemente, si vedem daca respecta pattern-ul
    // i va fi indexul din wordsArr (0, 1, 2, ...)
    foreach($wordsArr as $i => $word) {
        if(isset($map[$word]) && $map[$word] == $patternArr[$i]) {
            continue; //continuam foreach-ul, cu urmatorul element
        } else {
            return false; //cuvantul curent nu respecta pattern-ul, deci false
        }
    }

    return true; //daca s-a terminat foreach-ul fara sa se returneze false, inseamna ca toate cuvintele au respectat pattern-ul, deci true
}
$result = checkPattern("aaab", "cat cat cat dog");

var_dump($result);