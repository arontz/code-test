<?php

function sumEvenNum($numbers){
    $total = 0;

    foreach ($numbers as $num) {
        if($num%2 == 0){
            $total += $num;
        }
    }

    return $total; 
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //List integer number
$sum = sumEvenNum($numbers); //Call function
echo "Sum of even numbers: $sum"; //Output