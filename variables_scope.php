<?php

$a = 10;
echo "global:a is {$a} \n";

function myFunc()
{
    $b = 999;
    echo "in function:b is {$b} \n";
    echo "in function:b is {$a} \n";
}

myFunc();

echo "in function:b is {$b} \n";