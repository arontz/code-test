<?php
echo "Enter number: ";
$num = (int) trim(fgets(STDIN));

/*
●	80 - 100 Grade A
●	61 - 79 Grade B
●	41 - 60 Grade C
●	21 - 40 Grade D
●	0 - 20 Grade F
*/

echo "$num is ";
if($num >= 80)
{
    echo "Grade A";
}
elseif($num > 60 && $num < 80)
{
    echo "Grade B";
}
elseif($num > 40 && $num <= 60)
{
    echo "Grade C";
}
elseif($num > 20 && $num <= 40)
{
    echo "Grade D";
}
elseif($num <= 20)
{
    echo "Grade F";
}