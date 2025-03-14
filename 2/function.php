<?php

function sortingNum($numbers){
    $n = count($numbers);
    for ($i = 1; $i < $n; $i++) {
        $key = $numbers[$i];
        $j = $i - 1;

        while ($j >= 0 && $numbers[$j] > $key) {
            $numbers[$j + 1] = $numbers[$j];
            $j--;
        }
        $numbers[$j + 1] = $key;
    }
    return $numbers;
}

$numbers = [11, 50, 4, 5, 23, 7, 800]; //List integer number
$sorted = sortingNum($numbers); //Call function
echo json_encode($sorted); //Output