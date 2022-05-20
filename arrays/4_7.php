<?php
// Требуется объединить два массива в один.


$fruits = [
0 => "apple",
1 => "banana",
'ere' => "coconut",
4 => "grape"
];

$vegetables = [
    0 => "apple",
    1 => "not banana",
    'ere' => "not coconut",
    6 => "not grape"
    ];
$garden = array_merge($fruits, $vegetables);
var_dump($garden);
var_dump($fruits + $vegetables);