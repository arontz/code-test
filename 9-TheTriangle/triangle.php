<?php
echo "Enter a number: ";
$num = trim(fgets(STDIN));


if (is_numeric($num)) {
    echo "You entered a number: $num\n";
} else {
    echo "This is not a number!\n";
    exit;
}


echo $num;