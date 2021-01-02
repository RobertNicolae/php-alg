<?php
$nums = [2, 7, 11, 15];
$target = 18;

function check($nums, $target)
{
    $pairsMap = []; //creem o mapa
    foreach($nums as $num) {
        //stim ca trebuie sa gasim o pereche de 2 numere care sa ne dea suma $target
        //Deci, pentru numarul curent $num, trebuie sa gasim o val egala cu $target - $num, ca adunate sa dea $target
        $pairsMap[$num] = true; //setam $num ca si cheie
    }

    foreach($nums as $num) {
        if(isset($pairsMap[$target-$num])) {
            //este deja un numar egal cu $target-$num in array-ul $nums
            return true;
        }
    }

    return false; //daca s-a terminat al doilea foreach, inseamna ca nu a gasit o pereche in array
}

var_dump(check($nums, $target));
