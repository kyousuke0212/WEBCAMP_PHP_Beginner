<?php

function myFunc(int $val)
{
    $val *= 2;
    echo "in myFunc, val is {$val} \n";
}

$i = 10;
myFunc($i);
echo "i is {$i} \n";
