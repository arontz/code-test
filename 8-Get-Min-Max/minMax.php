<?php
echo "Enter FIVE(5) numbers \n\n";
$numbers = []; // Create an empty array

for ($i = 0; $i < 5; $i++) {
    echo "Enter a number: ";
    $input = trim(fgets(STDIN)); // Get user input
    $numbers[] = (int)$input; // Convert to integer and store in array
}

$min = min($numbers);
$max = max($numbers);

echo "\nmin number : $min \n";
echo "max number : $max \n";