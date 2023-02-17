<?php

for ([$v = [0,1], $i = 1]; count($v) <= 21; $i++) {
    $v[] = $v[$i - 1] + $v[$i];
}

echo implode(',', $v);
