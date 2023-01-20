<?php

$i = random_int(1, 999);
$j = random_int(1, 999);

$k = $i + $j;

echo "{$i} + {$j} = {$k} \n";

$k = $i - $j;
echo "{$i} - {$j} = {$k} \n";

$k = $i * $j;
echo "{$i} * {$j} = {$k} \n";

$k = $i / $j;
echo "{$i} / {$j} = {$k} \n";

$k = $i % $j;
echo "{$i} % {$j} = {$k} \n";

$k = $i ** 3;
echo "{$i} ** 3 = {$k} \n";

$k = pow($i, 3);
echo "pow({$i}, 3) = {$k} \n";

