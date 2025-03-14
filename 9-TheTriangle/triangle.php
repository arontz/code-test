<?php
echo "Enter a number: ";
$num = trim(fgets(STDIN));


if (is_numeric($num)) {
    printCenteredTriangle($num);
} else {
    echo "This is not a number!\n";
    exit;
}

function printCenteredTriangle($num) {
    for ($i = 1; $i <= $num; $i++) {
        $spaces = str_repeat(' ', $num - $i); // Spaces before stars
        $stars = str_repeat('*', (2 * $i) - 1); // Odd number of stars
        echo $spaces . $stars . "\n";
    }
}