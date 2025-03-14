<?php
function findFirstDuplicate($arr) {
    $seen = [];

    foreach ($arr as $num) {
        if (isset($seen[$num])) {
            return $num; // Return the first duplicate found
        }
        $seen[$num] = true;
    }

    return -1; // Return -1 if no duplicate is found
}

// Example usage:
$numbers = [2, 5, 3, 3, 5, 7, 3, 8];
echo findFirstDuplicate($numbers);