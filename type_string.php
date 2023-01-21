<?php

$s = "Hello";
var_dump($s);

echo $s[1] , "\n";

$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0] , "\n";

$num_i = 123;
$num_s = "123";
var_dump($num_i);
var_dump($num_s);

$double_s = "num is {$num_i} \n";
$single_s = 'num is {$num_i} \n';
var_dump($double_s);
var_dump($single_s);