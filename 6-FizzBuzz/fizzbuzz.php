<?php
function fizzBuzz($num) {
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n";
        } elseif ($i % 3 == 0) {
            echo "Fizz\n";
        } elseif ($i % 5 == 0) {
            echo "Buzz\n";
        } else {
            echo $i . "\n";
        }
    }
}
// Example usage: Print FizzBuzz from 1 to 20
fizzBuzz(20);