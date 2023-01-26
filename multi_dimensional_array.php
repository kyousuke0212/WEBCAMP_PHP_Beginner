<?php

$array = [
    [
        'key1' => 1,
        'key2' => 2,
        'key3' => 3,
    ],
    [
        'key1' => 11,
        'key2' => 22,
        'key3' => 33,
    ],
    [
        'key1' => 111,
        'key2' => 222,
        'key3' => 333,
    ],
];

var_dump($array);

foreach($array as $key => $value) {
    
    echo "{$key}番目の配列 \n";
    
    foreach($value as $k => $v) {
    
        echo "{$k} : {$v} \n";
    }
    
    echo "\n";
}